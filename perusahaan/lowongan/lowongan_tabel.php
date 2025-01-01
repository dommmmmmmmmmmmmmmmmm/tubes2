<?php
include "koneksi.php"; // Meng-include file koneksi.php

// Query untuk mendapatkan data lowongan
$query = "SELECT * FROM lowongan";
$result = mysqli_query($conn, $query);

// Mendapatkan tanggal saat ini (tanpa waktu)
$currentDate = date("Y-m-d"); // Format YYYY-MM-DD
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workify - Daftar Lowongan</title>
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
        <main class="w-3/4 p-8 overflow-x-auto">
            <!-- Header -->
            <header class="mb-8">
                <h3 class="text-2xl font-semibold">Daftar Lowongan</h3>
                <p class="text-gray-600">Berikut adalah daftar lowongan pekerjaan yang telah dibuat.</p>
            </header>

            <!-- Tabel Lowongan -->
            <section class="bg-white shadow rounded p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse table-auto text-sm text-gray-700">
                        <thead class="bg-gray-200 text-gray-700 uppercase text-xs font-semibold">
                            <tr>
                                <th class="border px-4 py-2 text-center">ID Lowongan</th>
                                <th class="border px-4 py-2 text-center">Posisi</th>
                                <th class="border px-4 py-2 text-center">Tanggal Buka</th>
                                <th class="border px-4 py-2 text-center">Tanggal Tutup</th>
                                <th class="border px-4 py-2 text-center">Alamat Perusahaan</th>
                                <th class="border px-4 py-2 text-center">Gaji</th>
                                <th class="border px-4 py-2 text-center">Jenis Kelamin</th>
                                <th class="border px-4 py-2 text-center">Umur</th>
                                <th class="border px-4 py-2 text-center">Tingkat Pendidikan</th>
                                <th class="border px-4 py-2 text-center">Pengalaman Kerja</th>
                                <th class="border px-4 py-2 text-center">Deskripsi Pekerjaan</th>
                                <th class="border px-4 py-2 text-center">Status</th>
                                <th class="border border-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <?php 
                                    // Mendapatkan tanggal buka dan tutup tanpa waktu (menjamin format Y-m-d)
                                    $tanggalB uka = date("Y-m-d", strtotime($row['tanggal_buka'])); 
                                    $tanggalTutup = date("Y-m-d", strtotime($row['tanggal_tutup'])); 

                                    // Menentukan status berdasarkan tanggal sekarang
                                    if ($currentDate >= $tanggalBuka && $currentDate <= $tanggalTutup) {
                                        $status = 'Buka';
                                        $statusClass = 'bg-green-500'; // Hijau untuk Buka
                                    } else {
                                        $status = 'Tutup';
                                        $statusClass = 'bg-red-500'; // Merah untuk Tutup
                                    }
                                ?>
                                <tr class="hover:bg-gray-100">
                                    <td class="border px-4 py-2 text-center"><?php echo $row['id']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['posisi']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $tanggalBuka; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $tanggalTutup; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['alamat_perusahaan']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo "Rp " . number_format($row['gaji'], 0, ',', '.'); ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['jenis_kelamin']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['umur']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['tingkat_pendidikan']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['pengalaman_kerja']; ?></td>
                                    <td class="border px-4 py-2 text-center"><?php echo $row['deskripsi_pekerjaan']; ?></td>
                                    <td class="border px-4 py-2 text-center">
                                        <span class="px-2 py-1 rounded-full text-white <?php echo $statusClass; ?>">
                                            <?php echo $status; ?>
                                        </span>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-center">
                                        <div class="flex justify-center space-x-2">
                                            <a href="edit.php?id=<?php echo $row['id']; ?>" 
                                            class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                                            Edit
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['id']; ?>" 
                                            class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus lowongan ini?');">
                                            Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>