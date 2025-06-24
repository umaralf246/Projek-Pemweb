<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Feedback - K-Eventory</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style type="text/tailwindcss">
    :root {
      --k-eventory-primary: #2563eb;
    }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .btn-primary {
      @apply bg-[var(--k-eventory-primary)] hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 text-sm flex items-center justify-center gap-2;
    }
  </style>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">

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
          <a href="/history" class="text-sm text-slate-700 hover:text-[var(--k-eventory-primary)]">Riwayat</a>
          <a href="/profile" class="text-sm text-slate-700 hover:text-[var(--k-eventory-primary)]">Profil</a>
        </nav>
      </div>
    </div>
  </header>

  <main class="flex-1 py-12 px-4 sm:px-6 lg:px-8" x-data="{ showModal: {{ session('showModal') ? 'true' : 'false' }} }">
    <div class="max-w-2xl mx-auto">
      <div class="bg-white rounded-xl shadow-lg p-8 space-y-6">
        <h2 class="text-2xl font-bold text-[var(--k-eventory-primary)] text-center">
          Feedback untuk Event: {{ $registration->event->title ?? 'Tanpa Judul' }}
        </h2>
        <form action="{{ route('feedback.store', $registration->id) }}" method="POST" class="space-y-4">
          @csrf

          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="name" name="name" value="{{ $registration->name }}" readonly
              class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-[var(--k-eventory-primary)] focus:border-[var(--k-eventory-primary)] bg-gray-100 cursor-not-allowed">
          </div>

          <div>
            <label for="feedback" class="block text-sm font-medium text-gray-700">Feedback</label>
            <textarea id="feedback" name="feedback" rows="5" required
              class="mt-1 w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-[var(--k-eventory-primary)] focus:border-[var(--k-eventory-primary)]"
              placeholder="Tulis feedback kamu di sini...">{{ old('feedback', $registration->feedback) }}</textarea>
          </div>

          <button type="submit" class="btn-primary w-full">
            Kirim Feedback
          </button>
        </form>
      </div>
    </div>

    {{-- Modal --}}
    <div x-show="showModal" x-transition
      class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div class="bg-white rounded-lg shadow-xl p-6 max-w-sm w-full text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Success" class="w-16 mx-auto mb-4" />
        <h3 class="text-xl font-bold text-gray-800 mb-2">Terima Kasih!</h3>
        <p class="text-gray-600 mb-4">Feedback kamu sudah terkirim dengan baik.</p>
        <button @click="window.location.href='{{ route('history') }}'" class="btn-primary w-full">
          Selesai
        </button>
      </div>
    </div>
  </main>

  <footer class="py-6 text-center text-sm text-gray-500 border-t border-gray-200 bg-white">
    © 2025 K-Eventory. All rights reserved.
  </footer>

</body>
</html>
