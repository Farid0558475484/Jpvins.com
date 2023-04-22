<?php
// Veritabanı bağlantısını dahil et
require_once 'db_connection.php';

// POST değişkenlerinden kullanıcı adı ve şifreyi al
$username = $_POST['username'];
$password = $_POST['password'];

// Şifreyi hashle
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Veritabanı sorgusu için hazırlık
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Kullanıcı adı doğruysa şifre kontrolü yap
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Giriş başarılı!";
        header('Location: index.php');

    } else {
        echo "Hatalı şifre!";
    }
} else {
    echo "Kullanıcı adı bulunamadı!";
}

// Bağlantıyı kapat
$stmt->close();
$conn->close();
