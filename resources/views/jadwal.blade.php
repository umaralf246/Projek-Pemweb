<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Saya - K-Eventory</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style type="text/tailwindcss">
        :root {
            --k-eventory-primary: #2563eb;
            /* Variabel secondary kita biarkan, tapi tidak kita pakai untuk teks di background putih */
            --k-eventory-secondary-bg: #f3f4f6; 
            --k-eventory-tertiary: #9ca3af;
        }
        body {
            font-family: 'Plus Jakarta Sans', 'Noto Sans', sans-serif;
        }
        .k-eventory-card-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .k-eventory-card-shadow-hover:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-slate-50">

<div class="min-h-screen flex flex-col">
    <header class="flex items-center justify-between border-b border-slate-200 bg-white px-6 sm:px-10 py-3">
        <div class="flex items-center gap-3 text-[var(--k-eventory-primary)]">
            <div class="size-6">
                <svg fill="currentColor" viewBox="0 0 48 48" class="w-6 h-6">
                    <path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z"/>
                </svg>
            </div>
            <h2 class="text-xl font-bold">K-Eventory</h2>
        </div>
        <nav class="hidden md:flex gap-6 items-center">
            <a href="/dashboard" class="text-sm text-slate-700 hover:text-[var(--k-eventory-primary)]">Dashboard</a>
            <a href="{{ route('jadwal') }}" class="text-sm font-bold text-[var(--k-eventory-primary)]">Jadwal</a>
            <a href="/history" class="text-sm text-slate-700 hover:text-[var(--k-eventory-primary)]">Riwayat</a>

            <div class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="focus:outline-none">
                <div class="bg-cover bg-center rounded-full size-10 border-2 border-[var(--k-eventory-primary)]" style='background-image: url("https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2563eb&color=fff");'></div>
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
        </nav>
    </header>

    <main class="flex-1 container max-w-6xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-[var(--k-eventory-primary)] text-center mb-8">Jadwal Saya</h1>

        @if($events->isEmpty())
            <p class="text-center text-gray-500">Belum ada event yang kamu ikuti.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($events as $event)
                    <div class="bg-white rounded-lg overflow-hidden k-eventory-card-shadow k-eventory-card-shadow-hover transition-shadow duration-300">
                        {{-- PERBAIKAN 1: Path gambar diperbaiki --}}
                        @if($event->image_url)
                            <img src="{{ asset('storage/' . $event->image_url) }}" alt="{{ $event->title }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-[var(--k-eventory-primary)]">{{ $event->title }}</h3>
                            
                            {{-- PERBAIKAN 2: Warna teks deskripsi diubah menjadi lebih gelap --}}
                            @if($event->description)
                                <p class="text-sm text-gray-600 mt-2">{{ $event->description }}</p>
                            @endif
                            
                            {{-- PERBAIKAN 3: Warna teks tanggal dan lokasi diubah menjadi lebih gelap --}}
                            <p class="text-sm text-gray-500 mt-4">
                                {{ \Carbon\Carbon::parse($event->event_time)->translatedFormat('l, d F Y – H:i') }} WIB
                            </p>
                            @if($event->location)
                                <p class="text-sm text-gray-500 mt-1">Lokasi: {{ $event->location }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </main>

    <footer class="py-6 text-center text-sm text-gray-500 border-t border-gray-200 bg-white">
    © 2025 K-Eventory. All rights reserved.</footer>
</div>

</body>
</html>