<!DOCTYPE html>  
<html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
    <title>Beranda Perusahaan</title>  
</head>  
<body class="bg-gray-100">  
    

        <header>
            <!-- Bagian Header -->
            <div class="bg-blue-200 bg-opacity-70 w-full">
                <div class="container mx-auto flex justify-between items-center px-6 py-4">
            
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <img src="../asset/img/logo.png" alt="Workify Logo" class="h-8">
                    <div>
                        <h1 class="text-lg font-bold text-blue-900">WORKIFY</h1>
                        <p class="text-sm text-blue-700">Find your jobs</p>
                    </div>
                </div>
                
           
                
                <!-- Icons -->
                <div class="flex items-center space-x-4">
                <!--<button class="p-2 rounded-full bg-white text-blue-800 shadow-md hover:shadow-lg"> -->
            
                    <!-- Icons -->
        <div class="flex items-center space-x-4 ml-auto">
            <!-- Bell Icon -->
            <a href="" class="hover:shadow-lg">
                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.193-.538 1.193H5.538c-.538 0-.538-.6-.538-1.193 0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365Zm-8.134 5.368a8.458 8.458 0 0 1 2.252-5.714m14.016 5.714a8.458 8.458 0 0 0-2.252-5.714M8.54 17.901a3.48 3.48 0 0 0 6.92 0H8.54Z"/>
                </svg>
            </a>
        
            <!-- Chat Icon -->
            <a href="" class="hover:shadow-lg">
                <svg class="w-6 h-6 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z"/>
                </svg>
            </a>
    
            
                <a href="#" class="text-blue-800 font-medium hover:text-white ">Untuk Pencari kerja</a>
                <a href="#" class="hover:shadow-lg">
                    <svg class="w-6 h-6 text-blue-800 ml-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1. 414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
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
        
    <div class="flex">  
        <!-- Sidebar -->  
        <div class="w-1/4 bg-white shadow-md p-4">  
             
            <ul>
                <li class="mb-4"><a href="#" class="text-gray-600 hover:text-blue-500">Dashboard</a></li>   
                <li class="mb-4"><a href="#" class="text-gray-600 hover:text-blue-500">Lowongan</a></li>  
                <li class="mb-4"><a href="#" class="text-gray-600 hover:text-blue-500">Pengaturan Akun</a></li>  
                <li class="mb-4"><a href="#" class="text-gray-600 hover:text-blue-500">Syarat & Kebijakan</a></li>  
            </ul>  
        </div>  

        <!-- Konten Utama -->  
        <div class="flex-1 p-8">  
            <h1 class="text-2xl font-bold mb-4">Selamat Datang!</h1>  
            <p class="mb-8">Yuk, lihatlah lowongan dan proses lamaran yang masuk.</p>  

            <div class="grid grid-cols-3 gap-4 mb-8">  
                <div class="bg-blue-500 text-white p-6 rounded-lg text-center">  
                    <p class="text-lg font-semibold">0</p>  
                    <p class="mt-2">Lamaran Baru</p>  
                </div>  
                <div class="bg-blue-500 text-white p-6 rounded-lg text-center">  
                    <p class="text-lg font-semibold">0</p>  
                    <p class="mt-2">Lamaran Belum Diproses</p>  
                </div>  
                <div class="bg-blue-500 text-white p-6 rounded-lg text-center">  
                    <p class="text-lg font-semibold">0</p>  
                    <p class="mt-2">Total Lamaran</p>  
                </div>  
            </div>  

            <div class="bg-blue-200 p-8 rounded-lg">  
                <h2 class="text-xl font-bold mb-4">Saatnya Posting Lowongan Pertama!</h2>  
                <p class="mb-4">WORKFY akan membantu anda mempertemukan dengan potensi yang paling tepat sesuai dengan kriteria.</p>  
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Buat Lowongan</button>  
            </div>  
        </div>  
    </div>  
     ?>
</body>  
</html>