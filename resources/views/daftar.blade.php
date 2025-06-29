<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Daftar Event - K-Eventory</title>

  <!-- Fonts & Tailwind -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Tailwind Custom Theme -->
  <style type="text/tailwindcss">
    :root {
      --primary-color: #2563eb;
      --primary-color-hover: #1d4ed8;
      --secondary-color: #f3f4f6;
      --text-primary: #111827;
      --text-secondary: #4b5563;
      --card-bg: #ffffff;
    }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .btn-primary {
      @apply bg-[var(--primary-color)] text-white hover:bg-[var(--primary-color-hover)] transition;
    }
    .nav-link {
      @apply text-[var(--text-primary)] hover:text-[var(--primary-color)] transition;
    }
  </style>
</head>
<body class="bg-gray-50">
  <div class="min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 flex items-center justify-between border-b border-gray-200 bg-white px-6 py-4 shadow-sm">
      <div class="flex items-center gap-3 text-[var(--primary-color)]">
        <svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
        </svg>
        <h1 class="text-xl font-bold">K-Eventory</h1>
      </div>

      <div class="flex items-center gap-6">
        <nav class="hidden md:flex items-center gap-6">
          <a href="/dashboard" class="nav-link text-sm font-medium">Dashboard</a>
          <a href="/jadwal" class="nav-link text-sm font-medium">Jadwal</a>
          <a href="/history" class="nav-link text-sm font-medium">Riwayat</a>
        </nav>
        <div class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="focus:outline-none">
            <div class="rounded-full size-10 border-2 border-[var(--primary-color)] bg-cover bg-center"
                 style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2563eb&color=fff");'></div>
          </button>
          <div x-show="open" @click.away="open = false" x-transition
               class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-md z-50">
            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
            <form method="POST" action="/logout">@csrf
              <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </header>

     @if (session('success'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-center">
    {{ session('success') }}
  </div>
@endif

@if (session('error'))
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 text-center">
    {{ session('error') }}
  </div>
@endif
    <!-- Main -->
    <main class="flex-1 px-4 sm:px-6 lg:px-8 py-10">
      <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold text-[var(--primary-color)] text-center mb-8">Formulir Pendaftaran Event</h2>

        <div class="mb-6">
          <img src="{{ $event->image_url ? asset('storage/' . $event->image_url) : 'https://via.placeholder.com/600x300' }}"
               class="w-full h-48 object-cover rounded-lg shadow-md" alt="Gambar Event">
          <h3 class="text-xl font-semibold text-[var(--text-primary)] mt-4">{{ $event->title }}</h3>
          <p class="text-sm text-[var(--text-secondary)]">
            {{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('l, d F Y H:i') }} - {{ $event->location }}
          </p>
        </div>

        <!-- Form -->
        <form method="POST" action="/event/register/{{ $event->id }}">
          @csrf
          <input type="hidden" name="event_id" value="{{ $event->id }}">

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
          </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
          </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor HP</label>
            <input type="tel" name="phone" required class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
          </div>

          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Alasan Mengikuti Event</label>
            <textarea name="reason" rows="4" maxlength="250" required
                      class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                      placeholder="Tuliskan alasanmu..."></textarea>
            <p class="text-xs text-gray-500 text-right" id="char-counter">0/250 karakter</p>
          </div>

          <button type="submit" class="btn-primary w-full py-3 rounded-md font-semibold">Daftar Sekarang</button>
        </form>
      </div>
    </main>
  

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-[var(--text-secondary)] border-t border-gray-200 bg-white">
      © 2025 K-Eventory. All rights reserved.
    </footer>
  </div>

  <!-- Karakter Counter -->
  <script>
    const textarea = document.querySelector('textarea[name="reason"]');
    const counter = document.getElementById('char-counter');
    textarea.addEventListener('input', () => {
      counter.textContent = `${textarea.value.length}/250 karakter`;
    });
  </script>
</body>
</html>
