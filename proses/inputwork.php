<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

if(isset($_POST['submit'])) {
	$title = $_POST['title'];
	$link = $_POST['link'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$description = $_POST['description'];


	include '../config.php';
	$result = mysqli_query($mysqli, "INSERT INTO tb_experience(title,link,startdate,enddate,description) VALUES('$title','$link','$startdate','$enddate','$description')");
		// var_dump($result);
	echo "<script>
	alert('Data berhasil ditambahkan');
	window.location.href='../admin/work.php';
	</script>";
	
}
?>