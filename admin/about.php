<?php 


include 'include/header.php';
include '../config.php';

$result = mysqli_query($mysqli, "SELECT * FROM tb_about WHERE id='1'");
$about = mysqli_fetch_array($result);

?>
<div class="container">
	<div class="row my-5">
		<div class="col-8">
			<div class="card">
				<form action="../proses/inputabout.php" enctype="multipart/form-data" method="post">
					<h5 class="card-header">Form input about</h5>
					<div class="card-body">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Content</label>
							<textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$about['content']?></textarea>
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
					<iframe  src="http://localhost/porto/index.php#about" frameborder="0" width="100%" height="500px"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include 'include/footer.php';
?>