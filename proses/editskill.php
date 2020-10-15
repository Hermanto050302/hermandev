<?php  
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

if(isset($_POST['submit'])) {
	$id=$_POST['id'];
	$title = $_POST['title'];
	$persen = $_POST['persen'];
	$color = $_POST['color'];
	
	include '../config.php';

	$result = mysqli_query($mysqli, "UPDATE tb_skill SET title='$title',persen='$persen',color='$color' WHERE id=$id");



	echo "<script>
	alert('Data berhasil diedit');
	window.location.href='../admin/skill.php';
	</script>";
} 
?>