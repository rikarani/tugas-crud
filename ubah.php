<?php
require "functions.php";

// Tangkap ID negara yang mau diubah
$id = $_GET["id"];

// Tampilkan Datanya
$data = fetch("SELECT * FROM tabel_negara WHERE id = '$id'");

// Pas tombol ubah di-klik, jalankan query nya
if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Diubah');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal Mengubah Data');
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
    <title>Ubah Data Negara</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body>

    <div class="container mx-auto max-w-2xl p-4 box-border">
        <h1 class="text-2xl text-center font-bold mb-4">Ubah Data Negara</h1>

        <form method="POST" class="flex w-full flex-col gap-4 text-center">
            <div class="w-full flex items-center">
                <div class="w-1/2">
                    <label for="kode" hidden>ID : </label>
                </div>
                <div class="w-3/4">
                    <input type="number" name="id" id="kode" class="w-full rounded-md" value="<?= $data[0]["id"] ?>" hidden>
                </div>
            </div>

            <div class="w-full flex items-center">
                <div class="w-1/2">
                    <label for="kode">Kode Negara : </label>
                </div>
                <div class="w-3/4">
                    <input type="number" name="kode" id="kode" class="w-full rounded-md" value="<?= $data[0]["kode"] ?>">
                </div>
            </div>

            <div class="w-full flex items-center">
                <div class="w-1/2">
                    <label for="nama">Nama Negara : </label>
                </div>
                <div class="w-3/4">
                    <input type="text" name="nama" id="nama" class="w-full rounded-md" value="<?= $data[0]["namaNegara"] ?>">
                </div>
            </div>

            <div class="w-full flex items-center">
                <div class="w-1/2">
                    <label for="presiden">Nama Kepala Negara : </label>
                </div>
                <div class="w-3/4">
                    <input type="text" name="presiden" id="presiden" class="w-full rounded-md" value="<?= $data[0]["namaKepalaNegara"] ?>">
                </div>
            </div>

            <div>
                <button type="submit" name="ubah" class="w-full text-xl rounded-md bg-blue-500 hover:bg-blue-700 text-white py-2 px-4">Ubah Data</button>
            </div>
        </form>
    </div>
</body>

</html>