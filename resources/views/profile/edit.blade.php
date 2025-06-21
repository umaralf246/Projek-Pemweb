<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K-Eventory - Edit Profile</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#2563eb',
            secondary: '#f3f4f6',
            dark: '#1f2937',
            grayText: '#6b7280',
            borderGray: '#e5e7eb'
          },
          fontFamily: {
            sans: ['Plus Jakarta Sans', 'sans-serif']
          }
        }
      }
    }
  </script>
</head>

<body class="bg-secondary font-sans">
  <div class="min-h-screen">
    <header class="bg-white shadow-sm sticky top-0 z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
          <svg class="h-8 w-8 text-primary" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.578 8.578C5.528 11.628 3.451 15.514 2.609 19.745c-.842 4.231-.41 8.616 1.24 12.601 1.65 3.985 4.446 7.392 8.032 9.788 3.586 2.397 7.803 3.676 12.116 3.676 4.314 0 8.531-1.279 12.118-3.676 3.586-2.396 6.382-5.803 8.033-9.788 1.65-3.985 2.082-8.37 1.24-12.601-.842-4.231-2.92-8.117-5.97-11.167L24 24 8.578 8.578z" fill="currentColor" />
          </svg>
          <h1 class="text-xl font-bold text-primary">K-Eventory</h1>
        </div>
        <div class="flex items-center gap-6">
          <nav class="hidden md:flex gap-6">
            <a href="/dashboard" class="text-grayText hover:text-primary text-sm font-medium">Dashboard</a>
            <a href="#" class="text-grayText hover:text-primary text-sm font-medium">Jadwal</a>
            <a href="/history" class="text-grayText hover:text-primary text-sm font-medium">Riwayat</a>
          </nav>
          <div class="relative">
            <button id="dropdownProfileButton" data-dropdown-toggle="dropdownProfile" class="flex items-center gap-2 focus:outline-none">
              <div class="w-10 h-10 rounded-full bg-cover bg-center border-2 border-primary" style="background-image: url('data:image/jpeg;base64,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')"></div>
              <svg class="w-4 h-4 text-grayText" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div id="dropdownProfile" class="hidden absolute right-0 mt-2 w-44 bg-white rounded-md shadow-lg z-10">
              <a href="/profile" class="block px-4 py-2 text-sm text-dark hover:bg-gray-100">Profil</a>
              <form method="POST" action="/logout" class="block">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-dark hover:bg-gray-100">Logout</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="py-10">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-primary mb-8">Edit Profil</h2>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-xl shadow">
            @csrf
            @method('PATCH')
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="flex items-center gap-6">
            <img id="profilePhotoPreview" class="h-24 w-24 rounded-full object-cover shadow-md" src="data:image/jpeg;base64,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" alt="Profile Photo">
            <div class="flex-1">
              <label class="block text-sm font-medium text-grayText mb-2">Ganti Foto Profil</label>
              <input type="file" name="profile_photo" accept="image/*" onchange="document.getElementById('profilePhotoPreview').src = window.URL.createObjectURL(this.files[0])" class="block w-full text-sm text-grayText file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:bg-primary file:text-white hover:file:bg-blue-700">
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-grayText">Nama Lengkap</label>
              <input type="text" name="full_name" value="Anam Khoirul" class="input-field">
            </div>
            <div>
              <label class="block text-sm font-medium text-grayText">NIM</label>
              <input type="text" name="student_id" value="0110224027" class="input-field">
            </div>
            <div class="md:col-span-2">
              <label class="block text-sm font-medium text-grayText">Email Kampus</label>
              <input type="email" name="email" value="0110224027@student.nurulfikri.ac.id" class="input-field">
            </div>
            <div>
              <label class="block text-sm font-medium text-grayText">Password Baru</label>
              <input type="password" name="password" placeholder="Kosongkan jika tidak ingin mengganti" class="input-field">
            </div>
            <div>
              <label class="block text-sm font-medium text-grayText">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" placeholder="Ulangi password baru" class="input-field">
            </div>
          </div>
          <div class="text-right">
            <button type="submit" class="btn-primary px-6 py-2 rounded-lg font-medium">Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </main>
  </div>

  <script>
    document.getElementById('dropdownProfileButton').addEventListener('click', function () {
      const dropdown = document.getElementById('dropdownProfile');
      dropdown.classList.toggle('hidden');
    });
  </script>
</body>

</html>
