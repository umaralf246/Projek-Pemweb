<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Edit Profil - K-Eventory</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/images/logo.png') }}">

  <!-- Font & Icon -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style type="text/tailwindcss">
    :root {
      --primary-color: #2563eb;
      --primary-color-hover: #1d4ed8;
      --secondary-color: #f3f4f6;
      --text-primary: #111827;
      --text-secondary: #4b5563;
      --card-bg: #ffffff;
    }
    .btn-primary {
      @apply bg-[var(--primary-color)] text-white hover:bg-[var(--primary-color-hover)] transition-colors duration-200;
    }
    .btn-secondary {
      @apply bg-[var(--secondary-color)] text-[var(--text-primary)] hover:bg-gray-200 transition-colors duration-200;
    }
    .nav-link {
      @apply text-[var(--text-primary)] hover:text-[var(--primary-color)] transition-colors duration-200;
    }
  </style>
</head>
<body class="bg-gray-50" style="font-family: 'Plus Jakarta Sans', sans-serif;">
  <div class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="sticky top-0 z-50 flex items-center justify-between border-b border-gray-200 bg-white px-6 sm:px-10 py-4 shadow-sm">
      <div class="flex items-center gap-3 text-[var(--primary-color)]">
        <svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
        </svg>
        <h1 class="text-xl font-bold tracking-tight">K-Eventory</h1>
      </div>

      <div class="flex items-center gap-6">
        <nav class="hidden md:flex items-center gap-6">
          <a class="nav-link text-sm font-medium" href="/dashboard">Dashboard</a>
          <a class="nav-link text-sm font-medium" href="/jadwal">Jadwal</a>
          <a class="nav-link text-sm font-medium" href="/history">Riwayat</a>
        </nav>

        <div class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="focus:outline-none">
            <div class="bg-cover bg-center rounded-full size-10 border-2 border-[var(--primary-color)]"
              style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2563eb&color=fff");'></div>
          </button>
          <div x-show="open" @click.away="open = false" x-transition
            class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-md z-50">
            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
            <form method="POST" action="/logout">
              @csrf
              <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 px-4 sm:px-6 lg:px-8 py-8">
      <div class="max-w-2xl mx-auto bg-white rounded-xl shadow p-6">
        <h2 class="text-2xl font-bold text-[var(--text-primary)] mb-6">Edit Profil</h2>

        @if (session('status'))
          <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-md">
            {{ session('status') }}
          </div>
        @endif

        <form action="{{ route('profile.update') }}" method="POST" class="space-y-5">
          @csrf
          @method('PATCH')

          <div>
            <label class="block text-sm font-medium text-[var(--text-secondary)]">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
              class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-[var(--text-secondary)]">Email</label>
            <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
              class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-[var(--text-secondary)]">Password Baru</label>
            <input type="password" name="password" placeholder="Kosongkan jika tidak ingin mengganti"
              class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
          </div>

          <div>
            <label class="block text-sm font-medium text-[var(--text-secondary)]">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" placeholder="Ulangi password baru"
              class="w-full mt-1 border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
          </div>

          <div class="pt-4 text-right">
            <button type="submit" class="btn-primary px-6 py-2 rounded-lg text-sm font-medium">
              Simpan Perubahan
            </button>
          </div>
        </form>
      </div>
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-[var(--text-secondary)] border-t border-gray-200 bg-white">
      © 2025 K-Eventory. All rights reserved.
    </footer>
  </div>
</body>
</html>
