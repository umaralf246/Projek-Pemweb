<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9ff;
            padding: 30px;
        }
        .container {
            width: 50%;
            margin: auto;
            background-color: #e0f0ff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn {
            margin-top: 20px;
            padding: 10px;
            background-color: #0051ff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #003ccc;
        }
        .logout {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profil</h1>
        @if(session('success'))
            <p style="color: green; text-align: center;">{{ session('success') }}</p>
        @endif
        <form action="/profile" method="POST">
            @csrf
            <label>Nama</label>
            <input type="text" name="nama" value="{{ session('nama', 'Tania') }}">

            <label>NIM</label>
            <input type="text" name="nim" value="{{ session('nim', '12345678') }}">

            <label>Email</label>
            <input type="email" name="email" value="{{ session('email', 'tania@example.com') }}">

            <button type="submit" class="btn">Simpan Perubahan</button>
        </form>

        <div class="logout">
            <a href="/" class="btn">Kembali</a>
        </div>
    </div>
</body>
</html>
