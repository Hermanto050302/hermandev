<?php 	
include 'include/header.php';
include 'config.php';
$about = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM tb_about WHERE id='1'"));
$general = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM tb_metaweb WHERE id='1'"));
$skill = mysqli_query($mysqli, "SELECT * FROM tb_skill ORDER BY id DESC");
$porto = mysqli_query($mysqli, "SELECT * FROM tb_portofolio ORDER BY id DESC");
$work = mysqli_query($mysqli, "SELECT * FROM tb_experience ORDER BY id DESC");
$edu = mysqli_query($mysqli, "SELECT * FROM tb_education ORDER BY id DESC");
// var_dump($porto);
?>
<style>
	@media (max-width: 767.98px) {
		.img-profile{
			width: 60%;
		}
	}
</style>
<body>

	<!-- <div class="position-static d-block d-md-none">
		<div class="card top-contact border-0 rounded-0">
			<div class="card-body">
				<div class="row">
					<div class="col text-white">
						<div class="row">
							<div class="col-12 text-center">
								<i class="fas fa-map-marker-alt text-white h4 "></i>
							</div>
							<div class="col-12">
								<div class="card-body">
									<p class="text-center text-white card-text">
										lorem
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col text-white">
						<div class="row">
							<div class="col-12 text-center">
								<i class="fas fa-phone text-white h4"></i>
							</div>
							<div class="col-12">
								<div class="card-body">
									<p class="text-center text-white card-text">
										lorem
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col text-white">
						<div class="row">
							<div class="col-12 text-center">
								<i class="far fa-comment-alt text-white h4"></i>
							</div>
							<div class="col-12">
								<div class="card-body">
									<p class="text-center text-white card-text">
										lorem
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="jumbotron rounded-0" id="slider" data-type="background" data-speed="3" style="background-image: url('assets/img/<?=$general['cover']?>');">
		<div class="container">
			<!-- <div class="card top-contact border-0 py-3 d-none d-md-block">
				<div class="card-body">
					<div class="row">
						<div class="col text-white">
							<div class="row no-gutters container">
								<div class="col-md-4">
									<i class="fas fa-map-marker-alt text-white h1"></i>
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<p class="card-text"></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col text-white">
							<div class="row no-gutters container">
								<div class="col-md-4">
									<i class="fas fa-phone text-white h1"></i>
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<p class="card-text"></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col text-white">
							<div class="row no-gutters container">
								<div class="col-md-4">
									<i class="far fa-comment-alt text-white h1"></i>
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<p class="card-text"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<center>
		<div class="card col-12 col-md-6 bg-white profile-card border-0">
			<div class="card-body">
				<div class="text-center">
					<img src="assets/img/<?=$general['profile']?>"  class="img-profile rounded-circle " width="30%" alt="...">
				</div>
				<h2 class="mt-3 font-weight-bold"><?=$general['name']?></h2>
				<p class="text-warning h5"><?=$general['tagline']?></p>

				<p class="mt-5">
					<span>
						<b>LAHIR :</b> <?=date('d F Y',strtotime($general['birthday']));?>
					</span>
					<br>
					<span>
						<b>EMAIL :</b> <?=$general['email']?>
					</span>
				</p>
				<div class="d-flex justify-content-center">
					<a class="btn" target="_blank" href="<?=$general['facebook']?>">
						<i class="fab fa-facebook h3"></i>
					</a>
					<a class="btn" target="_blank" href="<?=$general['instagram']?>">
						<i class="fab fa-instagram h3"></i>
					</a>
				</div>
			</div>
		</div>
	</center>
	<section class="project">
		<div class="container">
			<h2 class="font-weight-bold">Portfolio</h2>
			<p class="font-weight-bold text-warning">MY WORK</p>
			<div class="row">
				<?php  
				while($data = mysqli_fetch_array($porto)) { ?>
					<div class="col-6 col-md-3 mt-4">
						<a href=""  data-toggle="modal" data-target="#exampleModal<?=$data['id']?>">
							<img src="assets/img/portofolio/<?=$data['image']?>" width="100%" class="" alt="...">
						</a>
						<div class="modal fade" id="exampleModal<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<img src="assets/img/portofolio/<?=$data['image']?>" width="100%" class="" alt="...">
										<p class="text-center"><?=$data['title']?>
										<br>
										<a href="<?=$data['link']?>" target="_blank"><?=$data['link']?></a>
									</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>
<section class="about" id="about">
	<div class="container">	
		<div class="row">
			<div class="col-12 col-md-3">
				<h1 class="font-weight-bold">About me</h1>
				<span class="font-weight-bold text-warning">PROFESSIONAL PATH</span>
				<div class="garis bg-warning rounded mt-1"></div>
			</div>
			<div class="col-12 col-md-9 mt-4 mt-md-0" >
				<p class="text-dark">
					<?=$about['content']?>
				</p>
				<div class="row">
					<?php  
					while($data = mysqli_fetch_array($skill)) { ?>
						<div class="col-6 mt-4">
							<h5><?=$data['title']?></h5>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?=$data['persen']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$data['persen']?>%; background-color: <?=$data['color']?>;"></div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>	
	</div>
</section>
<section class="work">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3">
				<h1 class="font-weight-bold text-white">Work Experience</h1>
				<span class="font-weight-bold text-warning">PREVIOUS JOBS</span>
				<div class="garis bg-warning rounded mt-1"></div>
			</div>
			<div class="col-12 col-md-9 mt-4 mt-md-0">
				<?php  
				while($data = mysqli_fetch_array($work)) { ?>
					<div class="list">
						<h3 class="text-white font-weight-bold"><?=$data['title']?></h3>
						<a href="<?=$data['link']?>" class="text-warning font-weight-bold"><?=$data['link']?></a>
						<br>
						<span class="text-white">
							<?=date('d F Y',strtotime($data['startdate']))?> - <?php 
							if ($data['enddate']=='0000-00-00 00:00:00') {
								echo "Sekarang";
							}
							else{
								echo date('d F Y',strtotime($data['enddate']));
							}
							?>

						</span>
						<p class="text-white mt-4">
							<?=$data['description']?>
						</p>
					</div>
					<hr class="bg-white my-4">
				<?php }?>
			</div>
		</div>	
	</div>
</section>
<section class="education">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3">
				<h1 class="font-weight-bold">Education</h1>
				<span class="font-weight-bold text-warning">ACADEMIC CAREER</span>
				<div class="garis bg-warning rounded mt-1"></div>
			</div>

			<div class="col-12 col-md-9 mt-4 mt-md-0">
				<?php  
				while($data = mysqli_fetch_array($edu)) { ?>
				<div class="list">
					<h3 class=" font-weight-bold"><?=$data['title']?></h3>
					<span class="text-warning font-weight-bold">
						<?php
						if ($data['enddate']=='0000-00-00 00:00:00') {
								echo "Sekarang";
							}
							else{
								echo 'Lulus pada '.date('d F Y',strtotime($data['enddate']));
							}
							?>
					</span>
					<p class="text-white mt-4">
              <?=$data['education']?>
            </p>
					<br>
				</div>
				<hr class="bg-white my-4">
				<?php }?>
			</div>
		</div>	
	</div>
</section>
<section class="counter py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3">
				<h1 class="font-weight-bold">Contact Us</h1>
				<span class="font-weight-bold text-warning">SEND ME A MESSAGE</span>
				<div class="garis bg-warning rounded mt-1"></div>
			</div>
			<div class="col-12 col-md-9 mt-4 mt-md-0">
				<form action="">
					<div class="form-group">
						<label for="exampleFormControlInput1">Name</label>
						<input type="text" class="form-control" name="name" required="">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Email address</label>
						<input type="email" class="form-control" name="email" required="">
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Message</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
					</div>
					<button type="submit" class="btn btn-warning text-white mb-2 float-right">Send Message</button>
				</form>
			</div>
		</div>	
	</div>
</div>
</section>
<section class="footer py-4">
	<div class="container text-center text-white">
		Copyright ©2020 All rights reserved
	</div>
</section>
<a href="https://api.whatsapp.com/send?phone=<?=$general['whatsapp']?>" class="wa-float" target="_blank">
	<i class="fab fa-whatsapp my-float text-white"></i>
</a>
<?php 	
include 'include/footer.php';
?>
