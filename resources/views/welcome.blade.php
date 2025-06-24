<html><head>
<meta charset="utf-8"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Poppins:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600;700;800" onload="this.rel='stylesheet'" rel="stylesheet"/>
<title>K-Eventory</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
      :root {
        --primary-green: #1E40AF;
        --primary-blue: #3B82F6;--dark-text: #1A202C;
        --light-text: #4A5568;
        --background-light: #F7FAFC;
        --border-light: #E2E8F0;
      }
      body {
        font-family: 'Poppins', 'Inter', sans-serif;
      }
      .hero-bg {
        background-image: url("https://images.unsplash.com/photo-1523240795610-571c6b9db6a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80");background-size: cover;
        background-position: center;
      }
        .btn-primary {
        @apply bg-[var(--primary-green)] hover:bg-opacity-90 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300 min-h-[48px];
        }
        .btn-secondary {
        @apply bg-transparent hover:bg-[var(--primary-green)] text-[var(--primary-green)] hover:text-white border-2 border-[var(--primary-green)] font-semibold py-3 px-6 rounded-lg transition-colors duration-300 min-h-[48px];
        }
        .btn-google {
        @apply bg-white hover:bg-gray-100 text-[var(--dark-text)] border border-[var(--border-light)] font-semibold py-3 px-6 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2 min-h-[48px];
        }

      .feature-card {
        @apply bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300;
      }
      .feature-icon {
        @apply w-12 h-12 bg-[var(--primary-green)] text-white rounded-full flex items-center justify-center mb-4;
      }
    </style>
</head>
<body class="bg-[var(--background-light)] text-[var(--dark-text)]">
<div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="sticky top-0 z-50 bg-white shadow-md">
<div class="container mx-auto flex items-center justify-between whitespace-nowrap px-6 py-4">
<div class="flex items-center gap-2">
  <!-- Icon -->
  <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
    <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" />
  </svg>

  <!-- Tulisan -->
  <h2 class="text-[var(--dark-text)] text-2xl font-bold leading-tight">K-Eventory</h2>
</div>



<nav class="hidden md:flex items-center gap-6">
<a class="text-[var(--light-text)] hover:text-[var(--primary-green)] text-base font-medium transition-colors" href="#features">Features</a>
<a class="text-[var(--light-text)] hover:text-[var(--primary-green)] text-base font-medium transition-colors" href="#contact">Contact</a>
</nav>
<div class="flex items-center gap-3">
<!-- Tombol Login -->
<a href="{{ route('login') }}" class="btn-secondary hidden sm:block">Login</a>
<!-- Tombol Sign Up -->
<a href="{{ route('register') }}" class="btn-primary">Sign Up</a>
</div>
</div>
</header>
<main class="flex-1">
<section class="hero-bg text-white">
<div class="bg-black bg-opacity-50 min-h-[70vh] flex flex-col items-center justify-center text-center px-6 py-20">
<div class="max-w-3xl">
<h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6 drop-shadow-lg">
                Direktori Acara Kampus Terlengkap untuk Kamu
                </h1>
<p class="text-lg sm:text-xl text-gray-200 mb-10 drop-shadow-md">
                Temukan, ikuti, dan jangan lewatkan setiap momen di kampus.
                K-Eventory menghubungkan kamu dengan kehidupan kampus yang seru dan dinamis.
                </p>
<div class="flex flex-col sm:flex-row items-center justify-center gap-4">
<a href="{{ route('dashboard') }}" class="btn-primary w-full sm:w-auto">Explore Events</a>
<button class="btn-google w-full sm:w-auto">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.8714 10.0204H21V10H12V14H17.82C17.3729 15.8196 16.1559 17.2577 14.3857 18.09V21.09H18.1686C20.4925 19.0144 21.8714 15.9999 21.8714 12.36C21.8714 11.56 21.8714 10.7796 21.8714 10.0204Z" fill="#4285F4"></path><path d="M12 22C15.24 22 17.9757 20.91 20.0514 19.14L16.2786 16.14C15.1329 16.9319 13.7052 17.3655 12.21 17.36C9.26143 17.36 6.75857 15.39 5.79286 12.81H2V15.9C3.92286 19.58 7.70571 22 12 22Z" fill="#34A853"></path><path d="M5.79285 12.81C5.58182 12.2291 5.46637 11.6181 5.46285 11C5.46612 10.382 5.58146 9.77112 5.79285 9.19001V6.10001H2C0.724286 8.47001 0 11.38 0 14.54C0 17.7 0.724286 20.61 2 22.98L5.79285 19.81C5.35143 18.33 5.35143 16.67 5.79285 15.19V12.81Z" fill="#FBBC05"></path><path d="M12 5.00128C13.7929 4.95354 15.4786 5.63174 16.7529 6.83283L19.7357 3.85C17.6557 1.99283 14.9157 0.952931 12 1.00128C7.70571 1.00128 3.92285 3.42128 2 7.10128L5.79285 10.1913C6.75857 7.61128 9.26143 5.64128 12 5.64128V5.00128Z" fill="#EA4335"></path></svg>

<span>Sign In with Google</span>
</button>
</div>
</div>
</div>
</section>
<section class="py-16 sm:py-24 bg-[var(--background-light)]" id="features">
<div class="container mx-auto px-6">
<div class="text-center mb-12">
<h2 class="text-3xl sm:text-4xl font-bold text-[var(--dark-text)] mb-4">Kenapa K-Eventory?</h2>
<p class="text-lg text-[var(--light-text)] max-w-2xl mx-auto">
                  K-Eventory menyediakan berbagai fitur lengkap agar kamu selalu update dan aktif dalam kehidupan kampus.
                </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="feature-card">
<div class="feature-icon">
<svg fill="currentColor" height="28" viewBox="0 0 256 256" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
</svg>
</div>
<h3 class="text-xl font-semibold text-[var(--dark-text)] mb-2">Telusuri Semua Acara</h3>
<p class="text-[var(--light-text)] text-base">
                    Jelajahi kalender acara kampus — dari seminar akademik hingga kegiatan sosial, semuanya dalam satu tempat.
                  </p>
</div>
<div class="feature-card">
<div class="feature-icon">
<svg fill="currentColor" height="28" viewBox="0 0 256 256" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path>
</svg>
</div>
<h3 class="text-xl font-semibold text-[var(--dark-text)] mb-2">Ikuti Kegiatan Organisasi</h3>
<p class="text-[var(--light-text)] text-base">
                    Terhubung dengan organisasi mahasiswa dan jadi bagian dari komunitas kampus yang aktif.
                  </p>
</div>
<div class="feature-card">
<div class="feature-icon">
<svg fill="currentColor" height="28" viewBox="0 0 256 256" width="28" xmlns="http://www.w3.org/2000/svg">
<path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path>
</svg>
</div>
<h3 class="text-xl font-semibold text-[var(--dark-text)] mb-2">Dapatkan Notifikasi Pengumuman</h3>
<p class="text-[var(--light-text)] text-base">
                    Terima pemberitahuan penting tentang acara, tenggat waktu, dan informasi terbaru lainnya secara langsung.
                  </p>
</div>
</div>
</div>
</section>
<section class="py-16 sm:py-24 bg-[var(--primary-green)] text-white">
<div class="container mx-auto px-6 text-center">
<h2 class="text-3xl sm:text-4xl font-bold mb-6">Siap Bergabung?</h2>
<p class="text-lg sm:text-xl mb-10 max-w-2xl mx-auto">Gabung bersama K-Eventory hari ini dan ubah pengalaman kampusmu jadi lebih seru!
Daftar sekarang dan jangan sampai ketinggalan acara penting!</p>
<button class="bg-white hover:bg-gray-100 text-[var(--primary-green)] font-bold py-3 px-8 rounded-lg text-lg transition-colors duration-300">
                    Mulai Sekarang, Gratis!
                </button>
</div>
</section>
</main>
<footer class="bg-gray-800 text-gray-300 py-12" id="contact">
<div class="container mx-auto px-6">
<div class="flex flex-col md:flex-row justify-between items-center">
<div class="mb-6 md:mb-0">
<h2 class="text-xl font-semibold text-white">K-Eventory</h2>
<p class="text-sm">Direktori Acara Kampus Terlengkap untuk Kamu</p>
</div>
<div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 mb-6 md:mb-0">
<a class="hover:text-[var(--primary-green)] transition-colors" href="#">Terms of Service</a>
<a class="hover:text-[var(--primary-green)] transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-[var(--primary-green)] transition-colors" href="#">Contact Us</a>
</div>
<div class="text-sm">
<p>© 2025 K-Eventory. All rights reserved.</p>
</div>
</div>
</div>
</footer>
</div>
</div>

</body></html>