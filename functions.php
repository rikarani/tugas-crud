<?php
// Import File Koneksi ke Database
require "koneksi.php";

// Function buat fetch semua data dari database
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

// Function buat nambahin data ke database (Create)
function tambah($data)
{
    global $koneksi;

    $kode = htmlspecialchars($data["kode"]);
    $nama = htmlspecialchars($data["nama"]);
    $presiden = htmlspecialchars($data["presiden"]);

    mysqli_query($koneksi, "INSERT INTO tabel_negara VALUES ('', '$kode', '$nama', '$presiden')");

    return mysqli_affected_rows($koneksi);
}

// Function buat tampilin data (Read)
function cari($keyword)
{
    $kueri = "SELECT * FROM tabel_negara WHERE kode LIKE '%$keyword%' OR namaNegara LIKE '%$keyword%' OR namaKepalaNegara LIKE '%$keyword%'";

    return fetch($kueri);
}

// Function buat Update data (Update)
function ubah($data)
{
    global $koneksi;

    $id = htmlspecialchars($data["id"]);
    $kode = htmlspecialchars($data["kode"]);
    $nama = htmlspecialchars($data["nama"]);
    $presiden = htmlspecialchars($data["presiden"]);

    mysqli_query($koneksi, "UPDATE tabel_negara SET kode = '$kode', namaNegara = '$nama', namaKepalaNegara = '$presiden' WHERE id = '$id'");

    return mysqli_affected_rows($koneksi);
}

// Function buat hapus data (Delete)
function hapus($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM tabel_negara WHERE id = '$id'");

    return mysqli_affected_rows($koneksi);
}
