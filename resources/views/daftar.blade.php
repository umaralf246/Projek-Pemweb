<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran - K-Eventory</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f9;
      padding: 40px;
      text-align: center;
    }

    h1 {
      color: #333;
    }

    form {
      background: #fff;
      padding: 30px;
      max-width: 400px;
      margin: 20px auto;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      text-align: left;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button[type="submit"] {
      margin-top: 20px;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <h1>Form Pendaftaran Workshop UI/UX</h1>

  {{-- Pesan sukses (jika ada) --}}
  @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
  @endif

  <form action="{{ route('pendaftaran.store') }}" method="POST">
    @csrf

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="fakultas">Asal Fakultas:</label>
    <input type="text" id="fakultas" name="fakultas" required>

    <button type="submit">Kirim</button>
  </form>

</body>
</html>
