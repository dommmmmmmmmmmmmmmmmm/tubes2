<?php
include "login.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png'];
        $filename = $_FILES['foto']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);

        if (in_array(strtolower($filetype), $allowed)) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($filename);
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadFile)) {
                echo "Foto berhasil diunggah!";
            } else {
                echo "Gagal mengunggah foto.";
            }
        } else {
            echo "Tipe file tidak diperbolehkan.";
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
}
