<?php  
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

if(isset($_POST['submit'])) {
	$id=$_POST['id'];
	$title = $_POST['title'];
	$link = $_POST['link'];
	$description = $_POST['description'];

	$image=$_FILES['image']['name'];
	$fileimage=$_FILES['image']['tmp_name'];
	move_uploaded_file($fileimage,"../assets/img/portofolio/$image");
	
	include '../config.php';

	$result = mysqli_query($mysqli, "UPDATE tb_portofolio SET title='$title',link='$link',image='$image',description='$description' WHERE id=$id");



	echo "<script>
	alert('Data berhasil diedit');
	window.location.href='../admin/portofolio.php';
	</script>";
} 


?>