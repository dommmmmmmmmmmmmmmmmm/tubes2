<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Header</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  body {
      background-image: url("asset/img/background.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
  }
</style>
</head>
<body>

<!-- Header -->
<header>
  <!-- Bagian Header -->
  <div class="bg-blue-200 bg-opacity-70 w-full">
      <div class="container mx-auto flex justify-between items-center px-6 py-4">
  
      <!-- Logo -->
      <div class="flex items-center space-x-4">
          <img src="asset/img/logo.png" alt="Workify Logo" class="h-8">
          <div>
              <h1 class="text-lg font-bold text-blue-900">WORKIFY</h1>
              <p class="text-sm text-blue-700">Find your jobs</p>
          </div>
      </div>
      
      <!-- Menu -->
      <nav class="hidden md:flex items-center space-x-6">
          <a href="" class="text-blue-800 font-medium hover:text-white">Cari Lowongan</a>
          <a href="#" class="text-blue-800 font-medium hover:text-white">Lihat Profil</a>
          <a href="#" class="text-blue-800 font-medium hover:text-white">Template CV</a>
          <a href="#" class="text-blue-800 font-medium hover:text-white">Zoom</a>

      <div class="flex items-center space-x-4">
      <!-- Bell Icon -->
      <a href="" class="hover:shadow-lg">
          <svg class="w-6 h-6 text-blue-800 dark:text-whitearia-hidden="true xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.193-.538 1.193H5.538c-.538 0-.538-.6-.538-1.193 0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365Zm-8.134 5.368a8.458 8.458 0 0 1 2.252-5.714m14.016 5.714a8.458 8.458 0 0 0-2.252-5.714M8.54 17.901a3.48 3.48 0 0 0 6.92 0H8.54Z"/>
          </svg>
      </a>
  
      <!-- Chat Icon -->
      <a href="" class="hover:shadow-lg">
          <svg class="w-6 h-6 text-blue-800 dark:text-whitearia-hidden="true xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z"/>
          </svg>
      </a>
      </div>
      
      <!-- Buttons -->
      <a href="loginpengguna.php" name="pengguna" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Masuk</a>
      <button class="flex items-center text-blue-900">

      <!-- Settings Icon -->
      <a href="#"class="hover:shadow-lg">
          <svg class="w-6 h-6 text-blue-800 dark:text-whitearia-hidden="true xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
          </svg> 
      </a>
      </nav>
      
      <!-- Hamburger Menu (Visible on smaller screens) -->
      <button id="menu-toggle" class="md:hidden flex items-center text-blue-900 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
      </button>
      </div>
</header>    


  <!-- Hero Section -->
  <section class="bg-blue-100 text-center py-12 mt-20">
    <h1 class="text-2xl font-bold text-gray-700">Selamat Datang di aplikasi Workify, temukan pekerjaan yang anda inginkan disini</h1>
    <div class="mt-6 space-x-4">
      <a href="loginpengguna.php" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">Masuk</a>
      <a href="daftar.php" class="border border-blue-500 text-blue-500 px-6 py-2 rounded-md hover:bg-blue-100">Daftar Sekarang</a>
    </div>
  </section>

  <!-- Rekomendasi Perusahaan -->
  <section class="py-8 bg-blue-100/50 p-4 mt-20">
    <h2 class="text-xl font-semibold text-gray-700 text-center">REKOMENDASI PERUSAHAAN</h2>
    <div class="flex justify-center items-center space-x-6 mt-10">
      <img src="asset/img/telkom.png" alt="Telkom Indonesia" class="w-24 h-24 object-cover">
      <img src="asset/img/garuda.png" alt="Garuda Indonesia" class="w-24 h-24 object-cover">
      <img src="asset/img/gojek.png" alt="Gojek" class="w-24 h-24 object-cover">
      <img src="asset/img/bni.png" alt="BNI" class="w-24 h-24 object-cover">
      <img src="asset/img/shopee.png" alt="Shopee" class="w-24 h-24 object-cover">
      <img src="asset/img/pertamina.png" alt="Pertamina" class="w-24 h-24 object-cover">
    </div>
  </section>

  <script>
    // Daftar provinsi dalam array
    const provinsiList = [
      "Aceh", "Bali", "Banten", "Bengkulu", "DI Yogyakarta", "DKI Jakarta", 
      "Gorontalo", "Jambi", "Jawa Barat", "Jawa Tengah", "Jawa Timur", 
      "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", 
      "Kalimantan Timur", "Kalimantan Utara", "Kepulauan Bangka Belitung", 
      "Kepulauan Riau", "Lampung", "Maluku", "Maluku Utara", 
      "Nusa Tenggara Barat", "Nusa Tenggara Timur", "Papua", "Papua Barat", 
      "Papua Tengah", "Papua Pegunungan", "Papua Selatan", "Papua Barat Daya", 
      "Riau", "Sulawesi Barat", "Sulawesi Selatan", "Sulawesi Tengah", 
      "Sulawesi Tenggara", "Sulawesi Utara", "Sumatera Barat", 
      "Sumatera Selatan", "Sumatera Utara"
    ];
  
    // Ambil elemen dropdown
    const dropdown = document.getElementById("provinsi");
  
    // Tambahkan setiap provinsi sebagai opsi
    provinsiList.forEach((provinsi) => {
      const option = document.createElement("option");
      option.value = provinsi; // Nilai untuk backend
      option.textContent = provinsi; // Teks yang ditampilkan
      dropdown.appendChild(option); // Tambahkan opsi ke dropdown
    });
  </script>
  
  <script>
    // Daftar klasifikasi pekerjaan di Indonesia
    const klasifikasiPekerjaanList = [
      "Administrasi & Manajemen",
      "Akuntansi & Keuangan",
      "Arsitektur & Desain Interior",
      "Kesehatan & Medis",
      "Edukasi & Pelatihan",
      "Hukum & Legal",
      "Hotel, Restoran & Pariwisata",
      "IT & Teknologi",
      "Insinyur & Teknik",
      "Jasa Keamanan",
      "Jasa Transportasi & Logistik",
      "Keahlian Teknik & Mekanik",
      "Kreatif & Desain Grafis",
      "Manufaktur & Produksi",
      "Marketing & Pemasaran",
      "Media & Komunikasi",
      "Penjualan & Retail",
      "Pertanian & Perikanan",
      "Properti & Real Estate",
      "Riset & Pengembangan",
      "Sumber Daya Manusia (HR)",
      "Seni & Hiburan",
      "Keuangan & Asuransi",
      "Energi & Pertambangan",
      "Telekomunikasi",
      "Lainnya"
    ];
  
    // Ambil elemen dropdown untuk klasifikasi pekerjaan
    const klasifikasiDropdown = document.getElementById("klasifikasi");
  
    // Tambahkan setiap klasifikasi sebagai opsi
    klasifikasiPekerjaanList.forEach((klasifikasi) => {
      const option = document.createElement("option");
      option.value = klasifikasi; // Nilai untuk backend
      option.textContent = klasifikasi; // Teks yang ditampilkan
      klasifikasiDropdown.appendChild(option); // Tambahkan opsi ke dropdown
    });
  </script>
</body>
</html>