<?php
include 'config.php';
$general = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM tb_metaweb WHERE id='1'"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<!-- Primary Meta Tags -->
	<title><?=$general['title']?></title>
	<meta name="title" content="<?=$general['title']?>">
	<meta name="description" content="<?=$general['description']?>">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?=$general['domain']?>">
	<meta property="og:title" content="<?=$general['title']?>">
	<meta property="og:description" content="<?=$general['description']?>">
	<meta property="og:image" content="assets/img/<?=$general['profile']?>">
	
	<title>Document</title>
</head>
<body>