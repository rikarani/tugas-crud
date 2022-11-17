<?php
    require "koneksi.php";


    function cari($keyword)
    {
        global $koneksi;

        $query = mysqli_query($koneksi, "SELECT * FROM tabel_negara WHERE kode LIKE '%$keyword%' OR namaNegara LIKE '%$keyword%' OR namaKepalaNegara LIKE '%$keyword%'");

        return $query;
    }
