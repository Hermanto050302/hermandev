<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

include 'include/header.php';
include '../config.php';

$result = mysqli_query($mysqli, "SELECT * FROM tb_skill ORDER BY id DESC");
$modal = mysqli_query($mysqli, "SELECT * FROM tb_skill ORDER BY id DESC");
// $skill = mysqli_fetch_array($result);

?>
<div class="container">
	<div class="row my-5">
		<div class="col-8">
			<div class="card">

				
				<h5 class="card-header">Skill
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Tambah data
					</button>
				</h5>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" width="40%">Title</th>
								<th scope="col" width="40%">Persen</th>
								<th scope="col" width="20%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							while($data = mysqli_fetch_array($result)) { ?>
								<tr>
									<td><?=$data['title']?></td>
									<td>
										<p><?=$data['persen']?>%</p>
										<div class="progress">
											<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?=$data['persen']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$data['persen']?>%; background-color: <?=$data['color']?>;"></div>
										</div>
									</td>
									<td class="text-center">
										<button type="button" class="btn btn-warning text-white text-center mb-1" data-toggle="modal" data-target="#edit<?=$data['id']?>">
											Edit
										</button>
										<a href="../proses/deleteskill.php?id=<?=$data['id']?>" class="btn btn-danger text-center mb-1">Delete</a>
									</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card">
				<h5 class="card-header">Preview</h5>
				<div class="card-body">
					<iframe  src="http://hermandev.42web.io/index.php#about" frameborder="0" width="100%" height="500px"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form input skill</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="../proses/inputskill.php" enctype="multipart/form-data" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label>Title</label>
						<input value="" name="title" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Color</label>
						<input value="#fff" name="color" type="color" class="form-control" style="width: 10%">
					</div>
					<div class="form-group">
						<label>Level</label>
						<input type="range" name="persen" class="custom-range" min="0" max="100" id="customRange2">
					</div>
				</div>
				<div class="modal-footer text-right">
					<input type="submit" name="submit" value="simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>



<!-- modal edit -->
<?php  
while($datamodal = mysqli_fetch_array($modal)) { ?>
	<div class="modal fade" id="edit<?=$datamodal['id']?>" tabindex="-1" role="dialog" aria-labelledby="edit<?=$datamodal['id']?>" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form edit skill</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="../proses/editskill.php" enctype="multipart/form-data" method="post">
					<div class="modal-body">
						<input type="hidden" name="id" value="<?=$datamodal['id']?>">
						<div class="form-group">
							<label>Title</label>
							<input value="<?=$datamodal['title']?>" name="title" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Color</label>
							<input value="#<?=$datamodal['color']?>" name="color" type="color" class="form-control" style="width: 10%">
						</div>
						<div class="form-group">
							<label>Level</label>
							<input type="range" value="<?=$datamodal['persen']?>" name="persen" class="custom-range" min="0" max="100" id="customRange2">
						</div>
					</div>
					<div class="modal-footer text-right">
						<input type="submit" name="submit" value="simpan" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php }?>



<?php 
include 'include/footer.php';
?>