<?php
require "functions.php";

// Tangkap ID yang mau dihapus
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
        alert('Berhasil Menghapus Data');
        window.location.href = 'index.php';
    </script>";
}
