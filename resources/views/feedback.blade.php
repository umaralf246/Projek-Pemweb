<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Feedback untuk Event ID: {{ $id }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto px-4 py-10" x-data="{ showModal: {{ session('showModal') ? 'true' : 'false' }} }">
        <form action="{{ route('feedback.submit', $id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow-md">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">Nama</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-800">
            </div>

            <div>
                <label for="feedback" class="block text-gray-700 font-medium mb-1">Feedback</label>
                <textarea id="feedback" name="feedback" rows="5" required
                    class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:ring-2 focus:ring-blue-800"
                    placeholder="Tulis feedback kamu di sini..."></textarea>
            </div>

            <button type="submit"
                class="bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-800 transition w-full">
                Kirim Feedback
            </button>
        </form>

        <!-- Modal Pop-Up -->
        <div x-show="showModal" x-transition
            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div class="bg-white rounded-lg p-6 shadow-lg max-w-sm w-full text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Success"
                    class="w-20 mx-auto mb-4" />
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Terima Kasih!</h2>
                <p class="text-gray-600 mb-4">Feedback kamu sudah terkirim dengan baik.</p>
                <button @click="window.location.href='{{ route('dashboard') }}'"
                    class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    Selesai
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
