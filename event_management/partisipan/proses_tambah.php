<?php

include '../koneksi.php';
session_start(); // Mulai sesi

// Menghubungkan apakah tombol 'simpan' telah ditekan
if (isset($_POST['simpan'])) {
    /* Mengambil data dari form input
    dan menyimpannya ke dalam variabel*/
   
    $namaPartisipan = $_POST['nama'];
    $Email = $_POST['email'];
  

    /* Menyusun query SQL untuk menambahkan data ke tabel 'tb_siswa' */
    $sql = "INSERT INTO partisipan
    VALUES 
    ('','$namaPartisipan','$Email')";

    // Menjalankan query dan menyimpan hasilnya dalam variabel $query

    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if ($query) {
        $_SESSION['notifikasi'] = "Data Event berhasil ditambahkan!";
    } else {
        $_SESSION["notifikasi"] = "Data Event gagal ditambahkan!";
    }
    // Alihkan ke halaman index.php
    header('Location: index.php');
    } else {
        // Jika akses langsung tanpa form, tampilkan pesan error
        die("Akses ditolak...");
    }
    ?>