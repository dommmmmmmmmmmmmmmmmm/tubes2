<?php
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $posisi = $_POST['posisi'];
    $tanggal_buka = $_POST['tanggal_buka'];
    $tanggal_tutup = $_POST['tanggal_tutup'];
    $alamat_perusahaan = $_POST['alamat_perusahaan'];
    $gaji = $_POST['gaji'];
    $status = $_POST['status'];

    $query = "INSERT INTO lowongan (posisi, tanggal_buka, tanggal_tutup, alamat_perusahaan, gaji, status)
              VALUES ('$posisi', '$tanggal_buka', '$tanggal_tutup', '$alamat_perusahaan', $gaji, '$status')";

    if (mysqli_query($conn, $query)) {
        echo "Lowongan berhasil dibuat!";
        header("Location: lowongan_tabel.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workify - Buat Lowongan</title>
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
                <h3 class="text-2xl font-semibold">Buat Lowongan Baru</h3>
                <p class="text-gray-600">Lengkapi formulir di bawah untuk membuat lowongan baru.</p>
            </header>

            <form action="proses_buat_lowongan.php" method="POST" class="bg-white shadow rounded p-6 space-y-4">
                <div>
                    <label class="block font-medium text-gray-700">Posisi</label>
                    <input type="text" name="posisi" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Tanggal Buka</label>
                    <input type="date" name="tanggal_buka" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Tanggal Tutup</label>
                    <input type="date" name="tanggal_tutup" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Alamat Perusahaan</label>
                    <input type="text" name="alamat_perusahaan" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Gaji</label>
                    <input type="number" name="gaji" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="w-full border border-gray-300 rounded px-3 py-2">
                        <option value="Bebas">Bebas</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Umur</label>
                    <input type="text" name="umur" placeholder="Contoh: 18-30 tahun" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Tingkat Pendidikan</label>
                    <input type="text" name="tingkat_pendidikan" placeholder="Contoh: SMA/SMK, S1" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Pengalaman Kerja</label>
                    <input type="text" name="pengalaman_kerja" placeholder="Contoh: 2 tahun di bidang terkait" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Deskripsi Pekerjaan</label>
                    <textarea name="deskripsi_pekerjaan" class="w-full border border-gray-300 rounded px-3 py-2" rows="4"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan Lowongan</button>
            </form>
        </main>
    </div>
</body>
</html>
