<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

if(isset($_POST['submit'])) {
	$title = $_POST['name'];
	$persen = $_POST['email'];
	$color = $_POST['content'];


	include '../config.php';
	$result = mysqli_query($mysqli, "INSERT INTO tb_message(name,email,content) VALUES('$name','$email','$content')");
		// var_dump($result);
	echo "<script>
	alert('Pesan Behasil Dikirim');
	window.location.href='../index.php';
	</script>";
	
}
?>