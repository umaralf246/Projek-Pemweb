<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Event - K-Eventory</title>

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#2563eb',
            primaryHover: '#1e40af',
          },
          fontFamily: {
            sans: ['Plus Jakarta Sans', 'Noto Sans', 'sans-serif']
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    .form-label {
      @apply block text-sm font-medium text-gray-700 mb-1;
    }
    .form-input {
      @apply w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50;
    }
  </style>
</head>
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

<body class="bg-gray-50 font-sans">
  <div class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <header class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
      <div class="container mx-auto flex items-center justify-between px-6 py-4">
        <div class="flex items-center gap-3 text-primary">
          <svg class="h-7 w-7" fill="currentColor" viewBox="0 0 48 48">
            <path d="M8.57829 8.57829C5.52816 11.6284...Z"></path>
          </svg>
          <h1 class="text-xl font-bold">K-Eventory</h1>
        </div>
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-700">
          <a href="/dashboard" class="hover:text-primary">Dashboard</a>
          <a href="/jadwal" class="hover:text-primary">Jadwal</a>
          <a href="/history" class="hover:text-primary">Riwayat</a>
          <a href="/profile" class="hover:text-primary">Profil</a>
        </nav>
      </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 py-10 px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto bg-white p-6 sm:p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold text-primary text-center mb-8">Formulir Pendaftaran Event</h2>

        @if(session('success'))
          <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6">
            {{ session('success') }}
          </div>
        @endif

        <!-- Info Event -->
        <div class="mb-8">
          <img src="{{ $event->image_url ?? 'https://via.placeholder.com/600x200' }}" alt="Event Image"
               class="w-full h-48 object-cover rounded-lg shadow-md">
          <h3 class="text-2xl font-semibold text-gray-900 mt-6 mb-1">{{ $event->title }}</h3>
          <div class="text-sm text-gray-500 flex items-center gap-4">
            <div class="flex items-center gap-1">
              <span class="material-icons text-base">event</span>
              <span>{{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('l, d F Y') }}</span>
            </div>
            <div class="flex items-center gap-1">
              <span class="material-icons text-base">location_on</span>
              <span>{{ $event->location }}</span>
            </div>
          </div>
        </div>

        <!-- Form -->
        <form method="POST" action="/event/register/{{ $event->id }}">
          @csrf
          <input type="hidden" name="event_id" value="{{ $event->id }}">

          <div>
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" id="name" name="name" class="form-input" placeholder="Masukkan nama lengkap Anda" required>
            @error('name')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="Masukkan alamat email Anda" required>
            @error('email')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="phone" class="form-label">Nomor HP</label>
            <input type="tel" id="phone" name="phone" class="form-input" placeholder="Masukkan nomor HP aktif" required>
            @error('phone')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <label for="reason" class="form-label">Alasan Mengikuti Event</label>
            <textarea id="reason" name="reason" rows="4" maxlength="250" class="form-input" placeholder="Jelaskan alasan Anda (maks. 250 karakter)" required></textarea>
            <p class="text-xs text-gray-500 text-right" id="char-counter">0/250 karakter</p>
            @error('reason')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div>
            <button type="submit"
              class="w-full bg-primary hover:bg-primaryHover text-white font-semibold py-3 px-4 rounded-md transition duration-150">
              Daftar Sekarang
            </button>
          </div>
        </form>
      </div>
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-gray-500 border-t border-gray-200">
      © 2025 K-Eventory. All rights reserved.
    </footer>
  </div>

  <!-- JS: Karakter Counter -->
  <script>
    const textarea = document.getElementById('reason');
    const counter = document.getElementById('char-counter');
    textarea.addEventListener('input', () => {
      counter.textContent = `${textarea.value.length}/250 karakter`;
    });
  </script>
</body>
</html>
