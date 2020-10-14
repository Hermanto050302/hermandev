<?php 
include '../config.php';

// $query = ;
$check = mysqli_query($mysqli, "SELECT * FROM tb_metaweb");

$row = mysqli_fetch_array($check, MYSQLI_ASSOC);





// unlink('path/to/file.jpg');
if(isset($_POST['submit'])) {
	if(isset($row)) {
		//jika ada tabel
		$id = '1';
		$title = $_POST['title'];
		$description = $_POST['description'];
		$domain = $_POST['domain'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$tagline = $_POST['tagline'];
		$birthday = $_POST['birthday'];
		$whatsapp = $_POST['whatsapp'];
		$phone = $_POST['phone'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];
				
		$icon=$_FILES['icon']['name'];
		$fileicon=$_FILES['icon']['tmp_name'];
		move_uploaded_file($fileicon,"../assets/img/$icon");

		$profile=$_FILES['profile']['name'];
		$fileprofile=$_FILES['profile']['tmp_name'];
		move_uploaded_file($fileprofile,"../assets/img/$profile");

		$cover=$_FILES['cover']['name'];
		$filecover=$_FILES['cover']['tmp_name'];
		move_uploaded_file($filecover,"../assets/img/$cover");

		include '../config.php';

		$result = mysqli_query($mysqli, "UPDATE tb_metaweb SET title='$title',description='$description',domain='$domain',name='$name',email='$email',address='$address',tagline='$tagline',birthday='$birthday',whatsapp='$whatsapp',phone='$phone',icon='$icon',profile='$profile',facebook='$facebook',instagram='$instagram',cover='$cover'  WHERE id=$id");
		// var_dump($result);

		echo "<script>
		alert('Data berhasil diedit');
		window.location.href='../admin/general.php';
		</script>";
	} else {
		//jika tabel kosong
		$id = '1';
		$title = $_POST['title'];
		$description = $_POST['description'];
		$domain = $_POST['domain'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$tagline = $_POST['tagline'];
		$birthday = $_POST['birthday'];
		$whatsapp = $_POST['whatsapp'];
		$phone = $_POST['phone'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];

		$icon=$_FILES['icon']['name'];
		$fileicon=$_FILES['icon']['tmp_name'];
		move_uploaded_file($fileicon,"../assets/img/$icon");

		$profile=$_FILES['profile']['name'];
		$fileprofile=$_FILES['profile']['tmp_name'];
		move_uploaded_file($fileprofile,"../assets/img/$profile");

		$cover=$_FILES['cover']['name'];
		$filecover=$_FILES['cover']['tmp_name'];
		move_uploaded_file($filecover,"../assets/img/$cover");

		include '../config.php';
		$result = mysqli_query($mysqli, "INSERT INTO tb_metaweb(id,title,description,domain,name,email,address,tagline,birthday,whatsapp,phone,icon,profile,facebook,instagram,cover) VALUES('$id','$title','$description','$domain','$name','$email','$address','$tagline','$birthday','$whatsapp','$phone','$icon','$phone','$facebook','$instagram','$cover')");
		// var_dump($result);
		echo "<script>
		alert('Data berhasil ditambahkan');
		window.location.href='../admin/general.php';
		</script>";
	}
	
}
?>