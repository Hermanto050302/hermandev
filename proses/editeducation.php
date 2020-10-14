<?php  

if(isset($_POST['submit'])) {
	$id=$_POST['id'];
	$title = $_POST['title'];
	$enddate = $_POST['enddate'];
	$education = $_POST['education'];
	
	include '../config.php';

	$result = mysqli_query($mysqli, "UPDATE tb_education SET title='$title',enddate='$enddate',education='$education' WHERE id=$id");



	echo "<script>
	alert('Data berhasil diedit');
	window.location.href='../admin/education.php';
	</script>";
} 


?>