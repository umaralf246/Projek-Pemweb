<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight">
            Riwayat Event
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-blue-900 mb-8 text-center">Riwayat Event</h1>

        <div class="grid gap-8 grid-cols-1 md:grid-cols-2">
            @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow hover:shadow-md overflow-hidden transition">
                <img src="https://source.unsplash.com/600x300/?event,{{ $i }}" alt="Event {{ $i }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">Event {{ $i }}</h2>
                    <p class="text-gray-600 mb-4">Deskripsi singkat event ini menjelaskan isi atau manfaat eventnya.</p>
                    <a href="{{ url('/feedback/' . $i) }}" class="inline-block bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition">
                        Beri Feedback
                    </a>
                </div>
            </div>
            @endfor
        </div>
    </div>
</x-app-layout>
