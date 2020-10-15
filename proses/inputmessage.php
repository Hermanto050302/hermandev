<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$content = $_POST['content'];


	include '../config.php';
	$result = mysqli_query($mysqli, "INSERT INTO tb_meessage(name,email,content) VALUES('$name','$email','$content')");
		// var_dump($result);
	echo "<script>
	alert('Pesan Behasil Dikirim');
	window.location.href='../index.php';
	</script>";
	
}
?>