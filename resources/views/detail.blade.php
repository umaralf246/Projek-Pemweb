<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Event - Seminar KEMA</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
  <header>
    <div class="logo"><strong>K-Eventory</strong></div>
    <div>🗣️ Detail Event</div>
    <div class="profile">👤</div>
  </header>

  <main style="padding: 30px;">
    <h2>Seminar KEMA: Peran Mahasiswa di Era Digital</h2>
    <p><strong>Tanggal:</strong> 28 Juni 2025</p>
    <p><strong>Lokasi:</strong> Gedung Pertemuan Lt. 2</p>
    <p><strong>Waktu:</strong> 13.00 - 15.00 WIB</p>
    <p><strong>Penyelenggara:</strong> KEMA dan DPM</p>
    <p><strong>Deskripsi:</strong> Seminar interaktif bersama narasumber dari dunia akademik dan digital marketing. Membahas peran mahasiswa sebagai agen perubahan di era digital, media sosial, dan teknologi.</p>
    <p><strong>Fasilitas:</strong> Snack, seminar kit, e-sertifikat</p>

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
  <footer class="footer-modern">
  <div class="footer-nav">
    <a href="{{ url('/kalender') }}" class="footer-btn">
      <span class="emoji">📅</span>
      <span class="label">Kalender</span>
    </a>
    <a href="{{ url('/kategori') }}" class="footer-btn">
      <span class="emoji">🏷️</span>
      <span class="label">Kategori</span>
    </a>
    <a href="{{ url('/profil') }}" class="footer-btn">
      <span class="emoji">👤</span>
      <span class="label">Akun Saya</span>
    </a>
  </div>
</footer>
</body>
</html>
