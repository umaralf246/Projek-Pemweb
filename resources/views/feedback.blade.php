<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Feedback untuk Event ID: {{ $id }}
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto px-4 py-10">
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <textarea class="w-full border border-gray-300 rounded p-3" rows="5" placeholder="Tulis feedback kamu di sini..."></textarea>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                Kirim Feedback
            </button>
        </form>
    </div>
</x-app-layout>
