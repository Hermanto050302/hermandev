<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

var_dump($_POST);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli,"SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("Location: admin/index.php");
}else{
    header("Location: login.php?pesan=login_gagal");
}
?>