<?php 

if(isset($_POST['submit'])) {
	$title = $_POST['title'];
	$persen = $_POST['persen'];
	$color = $_POST['color'];


	include '../config.php';
	$result = mysqli_query($mysqli, "INSERT INTO tb_skill(title,persen,color) VALUES('$title','$persen','$color')");
		// var_dump($result);
	echo "<script>
	alert('Data berhasil ditambahkan');
	window.location.href='../admin/skill.php';
	</script>";
	
}
?>