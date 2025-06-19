<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight">
            Riwayat Event
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-blue-900 mb-8 text-center">Riwayat Event</h1>

        <div class="grid gap-8 grid-cols-1 md:grid-cols-2">
            @foreach ($events as $event)
            <div x-data="{ open: false }" class="bg-white rounded-lg shadow hover:shadow-md overflow-hidden transition">
                <img src="{{ $event['gambar'] }}" alt="Event {{ $event['id'] }}"
                     class="w-full h-48 object-cover cursor-pointer" @click="open = !open">
                <div class="p-6 cursor-pointer" @click="open = !open">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">{{ $event['judul'] }}</h2>
                    <p class="text-gray-600 mb-2">{{ $event['deskripsi'] }}</p>

                    <template x-if="open">
                        <div class="mt-2 text-sm text-gray-700 space-y-2">
                            <p><strong>Lokasi:</strong> Aula Kampus A</p>
                            <p><strong>Pembicara:</strong> (Dummy) Ust. H. Muhammad Nur, M.Kom</p>
                            <p><strong>Fasilitas:</strong> Snack, Sertifikat, Ilmu</p>
                        </div>
                    </template>

                    <p class="text-sm text-gray-500 mt-4">🕒 {{ $event['waktu'] }}</p>

                    <a href="{{ url('/feedback/' . $event['id']) }}" 
                       class="inline-block mt-4 bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800 transition">
                        Beri Feedback
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
