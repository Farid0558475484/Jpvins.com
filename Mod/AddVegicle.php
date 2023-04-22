<?php
// Veritabanı bağlantısını dahil et
require_once 'db_connection.php';

// POST isteği ile gönderilen kategori bilgilerini al
$VIN = $_POST['VIN'];
$csNumber = $_POST['csNumber'];
$Manifacture = $_POST['Manifacture'];
$Make = $_POST['Make'];
$Model = $_POST['Model'];
$Engine = $_POST['Engine'];
$Emission = $_POST['Emission'];
$Title2 = $_POST['Title2'];
$AccidentRepair = $_POST['AccidentRepair'];
$Odrollback = $_POST['Odrollback'];
$Mrecall = $_POST['Mrecall'];
$Safatyg = $_POST['Safatyg'];
$Contaminatoin = $_POST['Contaminatoin'];
$Collision = $_POST['Collision'];
$Malfunction = $_POST['Malfunction'];
$Theft = $_POST['Theft'];
$Fired = $_POST['Fired'];
$Waterd = $_POST['Waterd'];
$Halld = $_POST['Halld'];

// Kategori bilgilerini veritabanına ekle
$sql = "INSERT INTO vegicledetails (VIN,csNumber, Manifacture, Make, Model, Engine, Emission, Title2, AccidentRepair, Odrollback, Mrecall, Safatyg, Contaminatoin, Collision, Malfunction, Theft, Fired, Waterd, Halld) 
VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssssss", $VIN, $csNumber, $Manifacture, $Make, $Model, $Engine, $Emission, $Title2, $AccidentRepair, $Odrollback, $Mrecall, $Safatyg, $Contaminatoin, $Collision, $Malfunction, $Theft, $Fired, $Waterd, $Halld);

if ($stmt->execute()) {
    // Kategori başarıyla eklendiğinde kullanıcıyı bildir
    $message = "Kategori başarıyla eklendi!";
    header('Location: tables.php');
} else {
    // Hata durumunda kullanıcıyı bildir
    $message = "Kategori eklenirken hata oluştu: " . $stmt->error;
    
}

// Veritabanı bağlantısını kapat
$stmt->close();
$conn->close();
