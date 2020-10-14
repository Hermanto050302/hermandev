<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../login.php?pesan=belum_login");
}


include 'include/header.php';
?>
<div class="container">
	<div class="row mt-5">
		<div class="col-6 col-md-4 mb-4">
			<a href="general.php">
				<div class="card">
					<div class="card-body text-center">
						<i class="fas fa-user h1"></i>
						<h3>GENERAL</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col-6 col-md-4 mb-4">
			<a href="about.php">
				<div class="card">
					<div class="card-body text-center">
						<i class="fas fa-info-circle h1"></i>
						<h3>ABOUT</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col-6 col-md-4 mb-4">
			<a href="skill.php">
				<div class="card">
					<div class="card-body text-center">
						<i class="fas fa-photo-video h1"></i>
						<h3>SKILL</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col-6 col-md-4 mb-4">
			<a href="work.php">
				<div class="card">
					<div class="card-body text-center">
						<i class="fas fa-briefcase h1"></i>
						<h3>WORK</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col-6 col-md-4 mb-4">
			<a href="education.php">
				<div class="card">
					<div class="card-body text-center">
						<i class="fas fa-graduation-cap h1"></i>
						<h3>EDUCATION</h3>
					</div>
				</div>
			</a>
		</div>
		<div class="col-6 col-md-4 mb-4">
			<a href="portofolio.php">
				<div class="card">
					<div class="card-body text-center">
						<i class="fas fa-pencil-ruler h1"></i>
						<h3>PORTOFOLIO</h3>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<?php 
include 'include/footer.php';
?>