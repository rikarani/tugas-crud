<?php
// TODO : Bikin Function Read
// TODO : Bikin Function Update
// TODO : Bikin Function Delete
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

// Bikin Function buat nambahin data ke database (Create)
function tambah($data)
{
    global $koneksi;

    $kode = htmlspecialchars($data["kode"]);
    $nama = htmlspecialchars($data["nama"]);
    $presiden = htmlspecialchars($data["presiden"]);

    mysqli_query($koneksi, "INSERT INTO tabel_negara VALUES ('', '$kode', '$nama', '$presiden')");

    return mysqli_affected_rows($koneksi);
}
