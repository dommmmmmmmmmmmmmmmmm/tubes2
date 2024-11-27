<?php
include "db.config";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($email) || empty($password)) {
        echo "Email atau password tidak boleh kosong!";
    } else {
        // Contoh login sederhana (ganti dengan logika autentikasi Anda)
        if ($email == "admin@example.com" && $password == "password123") {
            echo "Login berhasil! Selamat datang, $email.";
        } else {
            echo "Email atau password salah!";
        }
    }
}
?>
