<?php
// Veritabanı bağlantısını dahil et
require_once '../Admin/Mod/db_connection.php';

// VIN arama sorgusunu hazırla
if (isset($_GET['VIN'])) {
    $vin = $_GET['VIN'];
    $sql = "SELECT * FROM vegicledetails WHERE VIN = '$vin'";

    // Sorguyu veritabanına gönder ve sonucu al
    $result = $conn->query($sql);

    // Sonuçta en az bir satır varsa tabloyu oluştur
    if ($result->num_rows > 0) {
        // Sonuçları result.php sayfasına yönlendir
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        header('Location: result.php?VIN=' . $vin);
        exit();
    } else {
        echo 'Kayıt bulunamadı!';
        header('Location: not-car-found.html');
    }
}

// Veritabanı bağlantısını kapat
$conn->close();
