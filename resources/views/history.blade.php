<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Riwayat Event - K-Eventory</title>
  <link crossorigin href="https://fonts.gstatic.com" rel="preconnect"/>
  <link as="style" href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800" onload="this.rel='stylesheet'" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"/>
  <style type="text/tailwindcss">
    :root {
      --k-eventory-primary: #2563eb;
      --k-eventory-secondary: #f3f4f6;
      --k-eventory-tertiary: #9ca3af;
    }
    body {
      font-family: 'Plus Jakarta Sans', 'Noto Sans', sans-serif;
    }
    .event-card-image {
      object-fit: cover;
      height: 12rem;
      width: 100%;
    }
    @media (min-width: 768px) {
      .event-card-image {
        width: 200px;
        height: 100%;
      }
    }
    .btn-primary {
      @apply bg-[var(--k-eventory-primary)] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2 text-sm;
    }
  </style>
</head>
<body class="bg-slate-50">
<div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
  <div class="layout-container flex h-full grow flex-col">
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center gap-3 text-[var(--k-eventory-primary)]">
            <div class="size-6">
              <svg fill="currentColor" viewBox="0 0 48 48" class="w-6 h-6">
                <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z"/>
              </svg>
            </div>
            <h1 class="text-xl font-bold">K-Eventory</h1>
          </div>
          <nav class="hidden md:flex gap-6 items-center">
            <a href="/dashboard" class="text-sm text-slate-700 hover:text-[var(--k-eventory-primary)]">Dashboard</a>
            <a href="/jadwal" class="text-sm text-slate-700 hover:text-[var(--k-eventory-primary)]">Jadwal</a>
            <a href="/history" class="text-sm font-bold text-[var(--k-eventory-primary)]">Riwayat</a>
            <div class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="focus:outline-none">
                <div class="bg-cover bg-center rounded-full size-10 border-2 border-[var(--k-eventory-primary)]" style='background-image: url("/images/avatar-default.png")'></div>
              </button>
              <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-md z-50">
                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                <form method="POST" action="/logout">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <main class="flex-1 py-8 px-4 sm:px-6 lg:px-8">
  <div class="container mx-auto max-w-4xl">
    <h2 class="text-3xl font-bold text-[var(--theme-color)] text-center mb-8">Riwayat Event</h2>

    @if ($registrations->isEmpty())
      <p class="text-center text-gray-500 text-lg">Kamu belum mengikuti event apapun.</p>
    @else
      <div class="space-y-6">
        @foreach ($registrations as $registration)
          @php $event = $registration->event; @endphp
          <div class="bg-white shadow-lg rounded-xl overflow-hidden transition-all duration-300 ease-in-out hover:shadow-xl" x-data="{ open: false }">
            <div class="md:flex md:items-start">
              <img alt="{{ $event->title }}" class="event-card-image" src="{{ $event->image_url ?? 'https://via.placeholder.com/600x400' }}" />
              <div class="p-5 flex-1">
                <h3 class="text-xl font-bold text-[var(--theme-color)] mb-1">{{ $event->title }}</h3>
                <p class="text-gray-600 text-sm mb-3">{{ $event->description }}</p>
                <div class="flex items-center gap-1.5 text-sm text-gray-500 mb-3">
                  <span class="material-icons-outlined text-base">schedule</span>
                  <span>{{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('d F Y, H:i') }} WIB</span>
                </div>
                <a href="{{ route('feedback.show', $registration->id) }}" class="text-[var(--theme-color)] font-medium hover:underline">Beri Feedback</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endif

  </div>
</main>
<footer class="py-6 text-center text-sm text-[var(--text-secondary)] border-t border-gray-200 bg-white">
© 2025 K-Eventory. All rights reserved.</footer>
</div>
</div>
</body>
</html>
