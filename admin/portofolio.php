<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}

include 'include/header.php';
include '../config.php';

$result = mysqli_query($mysqli, "SELECT * FROM tb_portofolio ORDER BY id DESC");
$modal = mysqli_query($mysqli, "SELECT * FROM tb_portofolio ORDER BY id DESC");
// var_dump($result);

?>
<div class="container">
	<div class="row my-5">
		<div class="col-12">
			<div class="card">				
				<h5 class="card-header">Portofolio
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Tambah data
					</button>
				</h5>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" width="40%">Title</th>
								<th scope="col" width="40%">Link Web</th>
								<th scope="col" width="40%">Image</th>
								<th scope="col" width="40%">Description</th>
								<th scope="col" width="20%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php  
							while($data = mysqli_fetch_array($result)) { ?>
								<tr>
									<td><?=$data['title']?></td>
									<td><a href="<?=$data['link']?>"><?=$data['link']?></a></td>
									<td><img width="50%" src="../assets/img/portofolio/<?=$data['image']?>" alt=""></td>
									<td><?=$data['description']?></td>
									<td class="text-center">
										<button type="button" class="btn btn-warning text-white text-center mb-1" data-toggle="modal" data-target="#edit<?=$data['id']?>">
											Edit
										</button>
										<a href="../proses/deleteportofolio.php?id=<?=$data['id']?>" class="btn btn-danger text-center mb-1">Delete</a>
									</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
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
			<form action="../proses/inputportofolio.php" enctype="multipart/form-data" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label>Title</label>
						<input value="" name="title" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>link</label>
						<input value="" name="link" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>image</label>
						<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Description</label>
						<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
				<form action="../proses/editportofolio.php" enctype="multipart/form-data" method="post">
					<div class="modal-body">
						<input type="hidden" name="id" value="<?=$datamodal['id']?>">
						<div class="form-group">
							<label>Title</label>
							<input value="<?=$datamodal['title']?>" name="title" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>link</label>
							<input value="<?=$datamodal['link']?>" name="link" type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>image</label>
							<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Description</label>
							<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$datamodal['description']?></textarea>
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