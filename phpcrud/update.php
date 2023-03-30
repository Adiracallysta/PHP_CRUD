<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$NRP = $_POST['NRP'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Jurusan = $_POST['Jurusan'];
$Email = $_POST['Email'];
$Alamat = $_POST['Alamat'];
$No_Hp = $_POST['No_Hp'];
$Asal_SMA = $_POST['Asal_SMA'];
$Matkul_Favorit = $_POST['Matkul_Favorit'];
 
// update data ke database
mysqli_query($koneksi,"update db_mahasiswa set Nama='$Nama', NRP='$NRP',Jenis_Kelamin='$Jenis_Kelamin', Jurusan='$Jurusan',Email='$Email',Alamat='$Alamat', No_Hp='$No_Hp',Asal_SMA='$Asal_SMA', Matkul_Favorit='$Matkul_Favorit' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>