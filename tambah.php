<?php
// Import File Function
require "functions.php";

// Cek Apakah Tombol Submit dah ditekan atau blum
if (isset($_POST["submit"])) {
    // Kalau data berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            window.location.href = 'index.php';
        </script>";
    }
    // Kalau data gagal ditambahkan
    else {
        echo "<script>
            alert('Data Gagal Ditambahkan');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Negara</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body>

    <div class="container mx-auto max-w-2xl p-4 box-border">
        <h1 class="text-2xl text-center font-bold mb-4">Tambah Data Negara</h1>

        <form method="POST" class="flex w-full flex-col gap-4 text-center">
            <div class="w-full flex items-center">
                <div class="w-1/2">
                    <label for="kode">Kode Negara : </label>
                </div>
                <div class="w-3/4">
                    <input type="number" name="kode" id="kode" class="w-full rounded-md" required>
                </div>
            </div>

            <div class="w-full flex items-center">
                <div class="w-1/2">
                    <label for="nama">Nama Negara : </label>
                </div>
                <div class="w-3/4">
                    <input type="text" name="nama" id="nama" class="w-full rounded-md" required>
                </div>
            </div>

            <div class="w-full flex items-center">
                <div class="w-1/2">
                    <label for="presiden">Nama Kepala Negara : </label>
                </div>
                <div class="w-3/4">
                    <input type="text" name="presiden" id="presiden" class="w-full rounded-md" required>
                </div>
            </div>

            <div>
                <button type="submit" name="submit" class="w-full text-xl rounded-md bg-blue-500 hover:bg-blue-700 text-white py-2 px-4">Tambah Data</button>
            </div>
        </form>
    </div>
</body>

</html>