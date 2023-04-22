<?php
// Veritabanı bilgilerini buraya girin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinkod";

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
