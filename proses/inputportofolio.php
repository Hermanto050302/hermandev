<?php 

if(isset($_POST['submit'])) {
	$title = $_POST['title'];
	$link = $_POST['link'];
	$description = $_POST['description'];

	$image=$_FILES['image']['name'];
	$fileimage=$_FILES['image']['tmp_name'];
	move_uploaded_file($fileimage,"../assets/img/portofolio/$image");


	include '../config.php';
	$result = mysqli_query($mysqli, "INSERT INTO tb_portofolio(title,link,image,description) VALUES('$title','$link','$image','$description')");
		// var_dump($result);
	echo "<script>
	alert('Data berhasil ditambahkan');
	window.location.href='../admin/portofolio.php';
	</script>";
	
}
?>