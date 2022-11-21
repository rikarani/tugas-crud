<?php
// Import File Function
require "functions.php";

// Fetch Data
$data = fetch("SELECT * FROM tabel_negara");

// pas tombol cari diklik
if (isset($_POST["cari"])) {
    $data = cari($_POST["keyword"]);
}

// Variable buat Nomer
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas CRUD</title>

    <!-- Style CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Style CSS -->
</head>

<body class="bg-slate-50">
    <div class="container max-w-3xl mx-auto box-border p-4">
        <h1 class="text-3xl font-bold text-center">Tugas CRUD</h1>

        <a href="tambah.php" class="mt-2 inline-block py-2 px-4 mb-4 bg-blue-500 rounded-md text-white hover:bg-blue-700">Tambah Data Negara</a>

        <form action="" method="POST" class="mb-4">
            <input type="text" name="keyword" id="cari" placeholder="Masukkan Keyword Pencarian..." class="border-b-2 border-black outline-none w-64 bg-inherit">
            <button type="submit" name="cari" class="bg-slate-700 hover:bg-slate-900 text-white inline-block w-20 h-8 rounded-md text-lg">Cari</button>
        </form>

        <table class="table-auto border-red-500 mx-auto w-full text-center rounded-lg overflow-hidden">
            <thead class="bg-slate-800 text-white">
                <tr>
                    <th class="py-2 px-2">No.</th>
                    <th>Aksi</th>
                    <th>Kode Negara</th>
                    <th>Nama Negara</th>
                    <th>Nama Kepala Negara</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $negara) : ?>
                    <tr class="even:bg-slate-300 odd:bg-slate-100">
                        <td><?= $i; ?></td>
                        <td class="flex gap-4 justify-center py-2">
                            <a href="ubah.php?id=<?= $negara["id"] ?>" class="bg-blue-500 text-white px-2 py-1 font-semibold rounded-md hover:bg-blue-700">Ubah</a>
                            <a href="hapus.php?id=<?= $negara["id"] ?>" onclick="return confirm('Apakah Ingin Menghapus Data?')" class="bg-red-500 text-white px-2 py-1 rounded-md font-semibold hover:bg-red-700">Hapus</a>
                        </td>
                        <td>+<?= $negara["kode"]; ?></td>
                        <td><?= $negara["namaNegara"]; ?></td>
                        <td><?= $negara["namaKepalaNegara"]; ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>