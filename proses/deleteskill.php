<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

include '../config.php';

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tb_skill WHERE id=$id");

echo "<script>
alert('Data berhasil diedit');
window.location.href='../admin/skill.php';
</script>";

?>