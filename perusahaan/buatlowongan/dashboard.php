<?php
include "dbconfig.php";

// Query untuk menghitung jumlah lowongan
$query = "SELECT COUNT(*) AS jumlah_lowongan FROM lowongan";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$jumlah_lowongan = $row['jumlah_lowongan'];

// Query untuk menghitung lowongan yang masih aktif
$query_aktif = "SELECT COUNT(*) AS jumlah_aktif FROM lowongan WHERE status = 'Buka'";
$result_aktif = mysqli_query($conn, $query_aktif);
$row_aktif = mysqli_fetch_assoc($result_aktif);
$jumlah_aktif = $row_aktif['jumlah_aktif'];

// Query untuk menghitung lowongan yang sudah ditutup
$query_tutup = "SELECT COUNT(*) AS jumlah_tutup FROM lowongan WHERE status = 'Tutup'";
$result_tutup = mysqli_query($conn, $query_tutup);
$row_tutup = mysqli_fetch_assoc($result_tutup);
$jumlah_tutup = $row_tutup['jumlah_tutup'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workify - Dasbor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-blue-500 text-white p-5">
            <h2 class="text-2xl font-bold mb-6">WORKIFY</h2>
            <nav>
                <ul class="space-y-4">
                    <li><a href="dashboard.php" class="block hover:text-gray-200">Beranda</a></li>
                    <li><a href="lowongan_tabel.php" class="block hover:text-gray-200">Lowongan</a></li>
                    <li><a href="#" class="block hover:text-gray-200">Pengaturan Akun</a></li>
                    <li><a href="#" class="block hover:text-gray-200">Syarat & Kebijakan</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Konten Utama -->
        <main class="w-3/4 p-8">
            <header class="mb-8">
                <h3 class="text-2xl font-semibold">Beranda Lowongan</h3>
            </header>

            <!-- Statistik Lowongan -->
            <section class="grid grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 shadow rounded flex flex-col items-center">
                    <h5 class="text-lg font-semibold text-gray-800">Total Lowongan</h5>
                    <p class="text-2xl font-bold text-blue-500"><?php echo $jumlah_lowongan; ?></p>
                </div>

                <div class="bg-white p-6 shadow rounded flex flex-col items-center">
                    <h5 class="text-lg font-semibold text-gray-800">Lowongan Aktif</h5>
                    <p class="text-2xl font-bold text-green-500"><?php echo $jumlah_aktif; ?></p>
                </div>

                <div class="bg-white p-6 shadow rounded flex flex-col items-center">
                    <h5 class="text-lg font-semibold text-gray-800">Lowongan Ditutup</h5>
                    <p class="text-2xl font-bold text-red-500"><?php echo $jumlah_tutup; ?></p>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="bg-blue-500 text-white p-6 rounded">
                <h4 class="text-xl font-semibold mb-2">Saatnya Posting Lowongan Pertama!</h4>
                <p class="mb-4">WORKIFY akan membantu Anda mendapatkan kandidat terbaik sesuai kriteria.</p>
                <a href="buatlowongan.php">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded shadow">
                    + Buat Lowongan Baru
                </button>
                </a>
            </section>
            </section>
        </main>
    </div>
</body>
</html>
