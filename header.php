
<?php
	session_start();
	if (!isset($_SESSION['newadmin'])) {
		header('location:login.php');
	}
	 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="title" content="Psd to Pix">
	<meta name="description" content="Pix website">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="">
    <title>Curd php</title>
    <!-------------------------- fonts-family ----------------->


    <!-- Magnafic popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

	<!-- CSS FILES -->
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
<section class="menu-section">
	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="register.php">Resister</a></li>
			<li><a href="student-list.php">student List</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</section>


