<?php
// Import File Koneksi ke Database
require "koneksi.php";

// Bikin Function buat fetch semua data dari database
function fetch(String $sql)
{
    // Koneksi Database
    global $koneksi;

    // variable buat nyimpan string query
    $kueri = mysqli_query($koneksi, $sql);

    // Array Kosong buat nyimpan hasil fetch nya
    $results = [];

    while ($data = mysqli_fetch_assoc($kueri)) {
        $results[] = $data;
    }

    return $results;
}
