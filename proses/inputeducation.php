<?php 

if(isset($_POST['submit'])) {
	$title = $_POST['title'];
	$enddate = $_POST['enddate'];
	$education = $_POST['education'];


	include '../config.php';
	$result = mysqli_query($mysqli, "INSERT INTO tb_education(title,enddate,education) VALUES('$title','$enddate','$education')");
		// var_dump($result);
	echo "<script>
	alert('Data berhasil ditambahkan');
	window.location.href='../admin/education.php';
	</script>";
	
}
?>