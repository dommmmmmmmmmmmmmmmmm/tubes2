<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workify Daftar</title>
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
            <a href="utama.php" class="text-blue-800 font-medium hover:text-white">Cari Lowongan</a>
            <a href="#" class="text-blue-800 font-medium hover:text-white">Lihat Profil</a>
            <a href="#" class="text-blue-800 font-medium hover:text-white">Template CV</a>
            <a href="#" class="text-blue-800 font-medium hover:text-white">Zoom</a>
        
        <!-- Icons -->
        <div class="flex items-center space-x-4">
        <!--<button class="p-2 rounded-full bg-white text-blue-800 shadow-md hover:shadow-lg"> -->
    
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
        <a href="loginpengguna.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Masuk</a>
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
    </div>
</header>    

<!-- Container utama untuk memusatkan konten -->
<div class="h-screen flex items-center justify-center">
    <main class="bg-blue-100 shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-blue-900 text-center mb-6">DAFTAR</h2>
        <div action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Masukkan e-mail" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="button" class="absolute inset-y-0 right-3 flex items-center focus:outline-none" onclick="togglePassword()">
                        <svg id="eye-icon-open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <svg id="eye-icon-closed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M3 3l18 18M10.477 10.477a3 3 0 014.243 4.243m2.83-2.83a7.5 7.5 0 01-10.606 0m14.264.707a9.961 9.961 0 01-4.172 3.555m-2.683 1.341A9.962 9.962 0 013.786 8.209m4.172-3.555A9.962 9.962 0 0112 4.5c1.116 0 2.194.186 3.214.528" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select id="role" name="role" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="admin">perusahaan</option>
                    <option value="user">pengguna</option>
                </select>
            </div> <br>
            
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-lg hover:bg-blue-700">DAFTAR</button>
        </form>
        
        <!-- Garis pembatas dengan teks -->
        <div class="flex items-center my-6">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="px-4 text-gray-500 text-sm">atau masuk dengan</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>
        
        <!-- Tombol Login dengan Media Sosial -->
        <div class="flex justify-center space-x-4 mt-4">
            <button class="bg-white shadow-md rounded-full p-2 hover:shadow-lg">
                <img src="asset/img/google.png" alt="Google" class="h-6">
            </button>
            <button class="bg-white shadow-md rounded-full p-2 hover:shadow-lg">
                <img src="asset/img/facebook.png" alt="Facebook" class="h-6">
            </button>
            <button class="bg-white shadow-md rounded-full p-2 hover:shadow-lg">
                <img src="asset/img/twitter.png" alt="Twitter" class="h-6">
            </button>
        </div> <br>

        <!-- Tautan ke halaman login -->
        <p class="text-center text-sm text-gray-600">Sudah punya akun? <a href="masuk.html" class="text-blue-600 hover:underline">Masuk di sini</a></p>
    </main>
</div>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeOpenIcon = document.getElementById('eye-icon-open');
    const eyeClosedIcon = document.getElementById('eye-icon-closed');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeOpenIcon.classList.add('hidden');
        eyeClosedIcon.classList.remove('hidden');
    } else {
        passwordInput.type = 'password';
        eyeOpenIcon.classList.remove('hidden');
        eyeClosedIcon.classList.add('hidden');
    }
}
</script>


<!-- Script untuk toggle menu pada perangkat kecil -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.querySelector('nav');

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>