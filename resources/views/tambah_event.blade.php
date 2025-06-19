<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Tambah Event</h1>
        <form action="/tambah-event" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Poster</label>
                <input type="file" name="poster" class="w-full">
            </div>
            <div class="mb-3">
                <label>Nama Event</label>
                <input type="text" name="nama_event" class="w-full border p-2">
            </div>
            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="w-full border p-2"></textarea>
            </div>
            <div class="mb-3">
                <label>Waktu Acara</label>
                <input type="datetime-local" name="waktu_acara" class="w-full border p-2">
            </div>
            <div class="mb-3">
                <label>Lokasi Acara</label>
                <input type="text" name="lokasi_acara" class="w-full border p-2">
            </div>
            <div class="mb-3">
                <label>Jumlah Peserta</label>
                <input type="number" name="jumlah_peserta" class="w-full border p-2">
            </div>
            <div class="mb-3">
                <label>Waktu Pendaftaran</label>
                <input type="datetime-local" name="waktu_pendaftaran" class="w-full border p-2">
            </div>
            <div class="mb-3">
                <label>Link Grup</label>
                <input type="url" name="link_grup" class="w-full border p-2">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Event</button>
        </form>
    </div>
</body>
</html>
