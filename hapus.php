<?php
require "koneksi.php";

function hapus($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM tabel_negara WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
        alert('Berhasil Menghapus Data');
        window.location.href = 'index.php';
    </script>";
}
