<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalender Event - K-Eventory</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
  <header>
    <div class="logo"><strong>K-Eventory</strong></div>
    <input type="text" placeholder="🔍 Cari event..." class="search-bar" />
    <div class="profile"><a href="akun.html">👤</a></div>
  </header>

  <main class="calendar-container">
    <h2>📆 Kalender Event</h2>
    <ul class="calendar-list">
      <li>
        <span class="calendar-date">25 Juni 2025</span>
        <span class="calendar-event">Workshop UI/UX</span>
      </li>
      <li>
        <span class="calendar-date">28 Juni 2025</span>
        <span class="calendar-event">Seminar KEMA</span>
      </li>
      <li>
        <span class="calendar-date">3 Juli 2025</span>
        <span class="calendar-event">UKM Fest</span>
      </li>
    </ul>
  </main>

 <footer class="footer-modern">
  <div class="footer-nav">
    <a href="{{ url('/kalender') }}" class="footer-btn">
      <span class="emoji">🗓️</span>
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
