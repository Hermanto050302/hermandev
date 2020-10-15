<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

include 'include/header.php';
include '../config.php';

$result = mysqli_query($mysqli, "SELECT * FROM tb_metaweb WHERE id='1'");
$general = mysqli_fetch_array($result);

?>
<div class="container">
	<div class="row my-5">
		<div class="col-8">
			<div class="card">
				<form action="../proses/inputgeneral.php" enctype="multipart/form-data" method="post">
					<h5 class="card-header">Form input general data</h5>
					<div class="card-body">
						<div class="form-group">
							<label>Web title</label>
							<input value="<?=$general['title']?>" name="title" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Description</label>
							<input value="<?=$general['description']?>" name="description" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Icon</label>
							<input name="icon" type="file" class="form-control-file">
						</div>
						<div class="form-group">
							<label>Domain</label>
							<input value="<?=$general['domain']?>" name="domain" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Name</label>
							<input value="<?=$general['name']?>" name="name" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input value="<?=$general['email']?>" name="email" type="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input value="<?=$general['address']?>" name="address" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Profile picture</label>
							<input name="profile" value="../assets/img/<?=$general['profile']?>" type="file" class="form-control-file">
						</div>
						<div class="form-group">
							<label>Cover picture</label>
							<input name="cover" value="../assets/img/<?=$general['cover']?>" type="file" class="form-control-file">
						</div>
						<div class="form-group">
							<label>Tagline</label>
							<input value="<?=$general['tagline']?>" name="tagline" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Birthday</label>
							<input value="<?= date('Y-m-d',strtotime($general['birthday'])) ?>" name="birthday" type="date" class="form-control">
						</div>
						<div class="form-group">
							<label>Whatapps</label>
							<input value="<?=$general['whatsapp']?>" name="whatsapp" type="number" class="form-control">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input value="<?=$general['phone']?>" name="phone" type="number" class="form-control">
						</div>
						<div class="form-group">
							<label>Facebook</label>
							<input value="<?=$general['facebook']?>" name="facebook" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Instagram</label>
							<input value="<?=$general['instagram']?>" name="instagram" type="text" class="form-control">
						</div>
					</div>
					<div class="card-footer text-right">
						<input type="submit" name="submit" value="simpan" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
		<div class="col-4">
			<div class="card">
				<h5 class="card-header">Preview</h5>
				<div class="card-body">
					<iframe src="http://localhost/porto/index.php#slider" frameborder="0" width="100%" height="500px"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include 'include/footer.php';
?>