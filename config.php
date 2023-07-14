<?php
//File PHP berikut berfungsi untuk mengkoneksikan halaman web dengan database mysql
  $host="localhost"; //Nama host. Secara default kita tulis saja "localhost" (karena pakai XAMPP)
  $user="rooP"; //Username. Secara default kita tulis saja "root" (karena pakai XAMPP)
  $password="YES"; //Password. Ubah sesuai dengan password database anda
  $database="registrasismp"; //Nama database yang akan kita gunakan
  // Membuat Koneksi ke database
  $conn = mysqli_connect($host, $user, $password, $database);

  // Memeriksa Koneksi
  if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
  }

  mysqli_select_db($conn, $database);

?>