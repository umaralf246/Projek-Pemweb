<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>K-Eventory Dashboard</title>

  <!-- Font & Icon -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

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
      <!-- Logo -->
      <div class="flex items-center gap-3 text-[var(--primary-color)]">
        <svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
        </svg>
        <h1 class="text-xl font-bold tracking-tight">K-Eventory</h1>
      </div>

      <!-- Navigation + Avatar -->
      <div class="flex items-center gap-6">
        <nav class="hidden md:flex items-center gap-6">
          <a class="nav-link text-sm font-medium" href="/dashboard">Dashboard</a>
          <a class="nav-link text-sm font-medium" href="/jadwal">Jadwal</a>
          <a class="nav-link text-sm font-medium" href="/history">Riwayat</a>
        </nav>

        <!-- Avatar Dropdown -->
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
      <div class="mx-auto max-w-7xl">
        <h2 class="text-3xl font-bold text-[var(--text-primary)] mb-8">Dashboard</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($events as $event)
          <div class="bg-[var(--card-bg)] rounded-xl shadow-lg overflow-hidden flex flex-col" x-data="{ expanded: false }">
            <img alt="Event Image" class="w-full h-48 object-cover"
              src="{{ $event->image_url ? asset('storage/' . $event->image_url) : 'https://via.placeholder.com/600x400?text=Event+Image' }}">
            <div class="p-5 flex flex-col flex-1">
              <h3 class="text-lg font-semibold text-[var(--text-primary)] mb-1">{{ $event->title }}</h3>
              
              {{-- Ganti $event->event_date menjadi $event->event_time --}}
              <p class="text-xs text-[var(--text-secondary)] mb-2">
                {{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('F j, Y, g:i A') }}
              </p>

              {{-- Ganti $event->short_description dengan Str::limit dari $event->description --}}
              <p class="text-sm text-[var(--text-secondary)] mb-4 flex-1">
                {{ Str::limit($event->description, 100) }}
              </p>

              {{-- Untuk detail, gunakan $event->description secara penuh --}}
              <div class="mt-2 mb-4" x-show="expanded" x-collapse>
                <p class="text-sm text-[var(--text-secondary)]">
                  {{ $event->description }}
                </p>
              </div>

              <div class="mt-auto flex flex-col sm:flex-row sm:items-center gap-3">
                <button @click="expanded = !expanded"
                  class="btn-secondary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                  <span x-text="expanded ? 'Hide Details' : 'View Details'">View Details</span>
                  <svg :class="{ 'rotate-180': expanded }" class="w-4 h-4 transition-transform" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.29a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                  </svg>
                </button>
                <a href="{{ route('event.show', $event->id) }}"
                  class="btn-primary w-full sm:w-auto text-sm font-medium py-2 px-4 rounded-lg text-center">
                  Register for Event
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-[var(--text-secondary)] border-t border-gray-200 bg-white">
      © 2025 K-Eventory. All rights reserved.
    </footer>
  </div>
</body>
</html>
