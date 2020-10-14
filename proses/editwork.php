<?php  

if(isset($_POST['submit'])) {
	$id=$_POST['id'];
	$title = $_POST['title'];
	$link = $_POST['link'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$description = $_POST['description'];
	
	include '../config.php';

	$result = mysqli_query($mysqli, "UPDATE tb_experience SET title='$title',link='$link',startdate='$startdate',enddate='$enddate',description='$description' WHERE id=$id");



	echo "<script>
	alert('Data berhasil diedit');
	window.location.href='../admin/work.php';
	</script>";
} 
?>