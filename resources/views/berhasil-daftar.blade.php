<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama_event"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);
    $waktu_acara = htmlspecialchars($_POST["waktu_acara"]);
    $lokasi = htmlspecialchars($_POST["lokasi_acara"]);
    $jumlah_peserta = intval($_POST["jumlah_peserta"]);
    $waktu_pendaftaran = htmlspecialchars($_POST["waktu_pendaftaran"]);
    $link_grup = htmlspecialchars($_POST["link_grup"]);

    // Cek dan buat folder uploads jika belum ada
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        if (mkdir($target_dir, 0777, true)) {
            // Folder berhasil dibuat
        } else {
            die("Gagal membuat folder uploads.");
        }
    }

    // Proses upload poster
    $poster_name = basename($_FILES["poster"]["name"]);
    $target_file = $target_dir . time() . "_" . $poster_name;
    $upload_ok = 1;
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES["poster"]["size"] > 20 * 1024 * 1024) {
        echo "File terlalu besar. Maksimal 2MB.";
        $upload_ok = 0;
    }

    if (!in_array($image_file_type, ["jpg", "jpeg", "png", "gif"])) {
        echo "Hanya file JPG, JPEG, PNG, GIF yang diperbolehkan.";
        $upload_ok = 0;
    }

    if ($upload_ok && move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
        echo "<!DOCTYPE html><html lang='en'><head>
                <meta charset='UTF-8'>
                <title>Event Disimpan</title>
                <script src='https://cdn.tailwindcss.com'></script>
              </head><body class='bg-gray-100 min-h-screen flex items-center justify-center'>
              <div class='bg-white p-8 rounded-lg shadow-md w-full max-w-md text-center'>
                <h2 class='text-xl font-semibold mb-4 text-green-600'>Event berhasil disimpan!</h2>
                <p><strong>Nama:</strong> $nama</p>
                <p><strong>Deskripsi:</strong> $deskripsi</p>
                <p><strong>Waktu Acara:</strong> $waktu_acara</p>
                <p><strong>Lokasi:</strong> $lokasi</p>
                <p><strong>Jumlah Peserta:</strong> $jumlah_peserta</p>
                <p><strong>Waktu Pendaftaran:</strong> $waktu_pendaftaran</p>
                <p><strong>Link Grup:</strong> <a href='$link_grup' class='text-blue-500 underline'>$link_grup</a></p>
                <img src='$target_file' alt='Poster Event' class='mx-auto max-h-64 mt-4'>
                <a href='index.php' class='mt-4 inline-block text-blue-600 hover:underline'>Kembali</a>
              </div>
              </body></html>";
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}


