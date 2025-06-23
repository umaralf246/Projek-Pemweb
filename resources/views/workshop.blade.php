<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Event - Workshop UI/UX</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
  <header>
    <div class="logo"><strong>K-Eventory</strong></div>
    <div>📅 Detail Event</div>
    <div class="profile">👤</div>
  </header>

  <main style="padding: 30px;">
    <h2>Workshop UI/UX Dasar</h2>
    <p><strong>Tanggal:</strong> 25 Juni 2025</p>
    <p><strong>Lokasi:</strong> Lab Komputer A</p>
    <p><strong>Waktu:</strong> 10.00 - 14.00 WIB</p>
    <p><strong>Penyelenggara:</strong> UKM Programming</p>
    <p><strong>Deskripsi:</strong> Pelatihan dasar desain antarmuka pengguna menggunakan Figma. Cocok untuk pemula maupun yang ingin memperkuat dasar UI/UX. Peserta akan belajar membuat wireframe, mockup, dan prototype.</p>
    <p><strong>Fasilitas:</strong> Sertifikat, snack, dan file desain</p>

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
