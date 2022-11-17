<?php
require "koneksi.php";

global $koneksi;

$data = mysqli_query($koneksi, "SELECT * FROM tabel_negara");
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

<body>
    <div class="container max-w-3xl mx-auto box-border p-4">
        <h1 class="text-3xl font-bold text-center">Tugas CRUD</h1>

        <a href="tambah.php" class="mt-2 inline-block py-2 px-4 mb-4 bg-blue-500 rounded-md text-white hover:bg-blue-700">Tambah Data Negara</a>

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
            <?php while ($negara = mysqli_fetch_assoc($data)) : ?>
                <tbody class="even:bg-slate-300 odd:bg-slate-100">
                    <td><?= $i; ?></td>
                    <td class="flex gap-4 justify-center py-2">
                        <a href="ubah.php?id=<?= $negara["id"] ?>" class="bg-blue-500 text-white px-2 py-1 font-semibold rounded-md hover:bg-blue-700">Ubah</a>
                        <a href="hapus.php?id=<?= $negara["id"] ?>" onclick="return confirm('Apakah Ingin Menghapus Data?')" class="bg-red-500 text-white px-2 py-1 rounded-md font-semibold hover:bg-red-700">Hapus</a>
                    </td>
                    <td>+<?= $negara["kode"]; ?></td>
                    <td><?= $negara["namaNegara"]; ?></td>
                    <td><?= $negara["namaKepalaNegara"]; ?></td>
                </tbody>
                <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>