<?php 
include '../config.php';

// $query = ;
$check = mysqli_query($mysqli, "SELECT * FROM tb_about");

$row = mysqli_fetch_array($check, MYSQLI_ASSOC);





// unlink('path/to/file.jpg');
if(isset($_POST['submit'])) {
	if(isset($row)) {
		//jika ada tabel
		$id = '1';
		$content = $_POST['content'];
		

		include '../config.php';

		$result = mysqli_query($mysqli, "UPDATE tb_about SET content='$content' WHERE id=$id");
		// var_dump($result);

		echo "<script>
		alert('Data berhasil diedit');
		window.location.href='../admin/about.php';
		</script>";
	} else {
		//jika tabel kosong
		$id = '1';
		$content = $_POST['content'];
		

		include '../config.php';
		$result = mysqli_query($mysqli, "INSERT INTO tb_about(id,content) VALUES('$id','$content')");
		// var_dump($result);
		echo "<script>
		alert('Data berhasil ditambahkan');
		window.location.href='../admin/about.php';
		</script>";
	}
	
}
?>