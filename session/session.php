<?php
session_start();
require "../koneksidb301.php"; // Memanggil file koneksi

$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari user di database
$sql = "SELECT username, password FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login berhasil
    $_SESSION['username'] = $username;
    header("Location: ../pertemuan301db.php"); // Redirect ke halaman selamat datang
} else {
    // Login gagal
    echo "Username atau password salah. <a href='login.php'>Coba lagi</a>";
}
$conn->close();
?>