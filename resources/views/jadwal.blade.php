<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K-Eventory - Jadwal Event</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <div class="logo"><strong>K-Eventory</strong></div>
    <input type="text" id="searchInput" placeholder="🔍 Cari event di sini..." class="search-bar" />
    <div class="profile"><a href="{{ url('/profil') }}">👤</a></div>
  </header>

  <nav class="filters">
    <div class="dropdown-modern">
      <button class="nav-button"><i>🏛️</i> ORMAWA ▾</button>
      <div class="dropdown-menu">
        <a href="#">LDK Senada</a>
        <a href="#">HIMASI</a>
        <a href="#">HIMATI</a>
        <a href="#">BEM</a>
        <a href="#">DPM</a>
      </div>
    </div>

    <div class="dropdown-modern">
      <button class="nav-button"><i>🎓</i> UKM ▾</button>
      <div class="dropdown-menu">
        <a href="#">GDGOC</a>
        <a href="#">BizzClub</a>
        <a href="#">Forum Perempuan</a>
        <a href="#">MUDENG</a>
      </div>
    </div>

    <div class="dropdown-modern">
      <button class="nav-button"><i>👥</i> KEMA</button>
    </div>

    <select id="sortSelect" class="sort">
      <option disabled selected>Sort by: Tanggal</option>
      <option value="asc">Tanggal Terdekat</option>
      <option value="desc">Tanggal Terjauh</option>
    </select>
  </nav>

  <section class="cards">
    <div class="card" data-tanggal="2025-06-25">
      <div class="image"></div>
      <h3>Workshop UI/UX</h3>
      <p class="desc">Pelatihan dasar desain dengan Figma, terbuka untuk umum.</p>
      <a href="{{ url('/workshop') }}">[Detail]</a>
    </div>
    <div class="card" data-tanggal="2025-07-03">
      <div class="image"></div>
      <h3>UKM Fest 2025</h3>
      <p class="desc">Festival tahunan dari seluruh UKM kampus.</p>
      <a href="{{ url('/ukmfest') }}">[Detail]</a>
    </div>
    <div class="card" data-tanggal="2025-06-28">
      <div class="image"></div>
      <h3>Seminar KEMA</h3>
      <p class="desc">Diskusi terbuka bersama organisasi mahasiswa kampus.</p>
      <a href="{{ url('/detail') }}">[Detail]</a>
    </div>
  </section>

  <section class="featured">
    <p><strong>Tanggal:</strong> 25 Juni 2025</p>
    <p><strong>Event:</strong> Workshop UI/UX Dasar</p>
    <p><strong>Lokasi:</strong> Lab Komputer A</p>
    <p><strong>Waktu:</strong> 10.00 - 14.00 WIB</p>
    <p><strong>Penyelenggara:</strong> UKM Programming</p>
    <div class="buttons">
      <a href="{{ url('/workshop') }}">Lihat Detail</a>
      <a href="{{ url('/daftar') }}">Daftar Sekarang</a>
    </div>
  </section>

  <section class="featured">
    <p><strong>Tanggal:</strong> 3 Juli 2025</p>
    <p><strong>Event:</strong> UKM Fest 2025</p>
    <p><strong>Lokasi:</strong> Aula Serbaguna Kampus</p>
    <p><strong>Waktu:</strong> 08.00 - 17.00 WIB</p>
    <p><strong>Penyelenggara:</strong> Seluruh UKM Kampus</p>
    <div class="buttons">
      <a href="{{ url('/ukmfest') }}">Lihat Detail</a>
      <a href="{{ url('/daftar') }}">Daftar Sekarang</a>
    </div>
  </section>

  <section class="featured">
    <p><strong>Tanggal:</strong> 28 Juni 2025</p>
    <p><strong>Event:</strong> Seminar KEMA: Peran Mahasiswa di Era Digital</p>
    <p><strong>Lokasi:</strong> Gedung Pertemuan Lt. 2</p>
    <p><strong>Waktu:</strong> 13.00 - 15.00 WIB</p>
    <p><strong>Penyelenggara:</strong> KEMA dan DPM</p>
    <div class="buttons">
      <a href="{{ url('/detail') }}">Lihat Detail</a>
      <a href="{{ url('/daftar') }}">Daftar Sekarang</a>
    </div>
  </section>

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

  <script>
    const select = document.getElementById("sortSelect");
    const cardsContainer = document.querySelector(".cards");

    select.addEventListener("change", () => {
      const cards = Array.from(cardsContainer.children);
      cards.sort((a, b) => {
        const dateA = new Date(a.dataset.tanggal);
        const dateB = new Date(b.dataset.tanggal);
        return select.value === "asc" ? dateA - dateB : dateB - dateA;
      });
      cards.forEach(card => cardsContainer.appendChild(card));
    });

    const searchInput = document.getElementById("searchInput");
    searchInput.addEventListener("input", function () {
      const keyword = this.value.toLowerCase();
      const cards = document.querySelectorAll(".card");
      cards.forEach(card => {
        const title = card.querySelector("h3").textContent.toLowerCase();
        const desc = card.querySelector(".desc").textContent.toLowerCase();
        card.style.display = (title.includes(keyword) || desc.includes(keyword)) ? "block" : "none";
      });

      const featuredSections = document.querySelectorAll(".featured");
      featuredSections.forEach(section => {
        const text = section.textContent.toLowerCase();
        section.style.display = text.includes(keyword) ? "block" : "none";
      });
    });
  </script>
</body>
</html>
