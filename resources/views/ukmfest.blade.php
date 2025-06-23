<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Event - UKM Fest 2025</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
  <header>
    <div class="logo"><strong>K-Eventory</strong></div>
    <div>🎉 Detail Event</div>
    <div class="profile">👤</div>
  </header>

  <main style="padding: 30px;">
    <h2>UKM Fest 2025</h2>
    <p><strong>Tanggal:</strong> 3 Juli 2025</p>
    <p><strong>Lokasi:</strong> Aula Serbaguna Kampus</p>
    <p><strong>Waktu:</strong> 08.00 - 17.00 WIB</p>
    <p><strong>Penyelenggara:</strong> Seluruh UKM Kampus</p>
    <p><strong>Deskripsi:</strong> Festival tahunan dari seluruh UKM kampus yang menampilkan pameran, pertunjukan, lomba, dan open recruitment dari masing-masing UKM. Terbuka untuk seluruh mahasiswa baru dan umum.</p>
    <p><strong>Fasilitas:</strong> Hadiah lomba, sertifikat partisipasi, booth makanan</p>

   <div class="buttons">
      <a href="{{ url('/') }}">← Kembali</a>
      <a href="{{ url('/daftar') }}">Daftar Sekarang</a>
    </div>
  </main>

  <footer>
    <a href="{{ url('/kalender') }}">📅 Kalender</a>
    <a href="{{ url('/kategori') }}">🏷️ Kategori</a>
    <a href="{{ url('/profil') }}">👤 Akun Saya</a>
  </footer>
</body>
</html>
