<?php
// Veritabanı bağlantısını dahil et
require_once 'db_connection.php';

// POST isteği ile gönderilen kategori adını al
$categoryName = $_POST['Cat_name'];

// Kategori adı veritabanına ekle
$sql = "INSERT INTO catagory (Cat_name) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $categoryName);

if ($stmt->execute()) {
    // Kategori başarıyla eklendiğinde kullanıcıyı bildir
    $message = "Kategori başarıyla eklendi!";
} else {
    // Hata durumunda kullanıcıyı bildir
    $message = "Kategori eklenirken hata oluştu: " . $conn->error;
}

// İşlem sonrası bağlantıyı kapat
$stmt->close();
$conn->close();

// Kullanıcıya bildirim göstermek için AddCat.html sayfasına yönlendir
header("Location: AddCat.html?message=" . urlencode($message));
exit();
