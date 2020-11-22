<?php 
require_once('config.php');
	session_start();
  if(isset($_POST['login_btn'])){
  	$username = $_POST['username'];
  	$password = $_POST['password'];

  	$stm = $pdo->prepare("SELECT * FROM admin WHERE username=?");
  	$stm->execute(array($username));
  	$adcount = $stm->rowCount();
  	$adDetails = $stm->fetchAll(PDO::FETCH_ASSOC);

  	if(empty($username)){
  		$error = "Username is required";
  	}
  	else if (empty($password)) {
  		$error = "Password is required";
  	}
  	else if($adcount == 0){
  		$error = "Username and password is invlied!";
  	}
  	else{

  		$dbpassword = $adDetails[0]['password'];
  		if ($dbpassword == $password) {
  			
  			$_SESSION['newadmin'] = $adDetails;
  			header('location:student-list.php');
  		}
  		else{
  			$error = "Username and password is invlied!";
  		}
  	}
  }
  if(isset($_SESSION['newadmin'])) {
		header('location:student-list.php');
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
    <title>Login</title>
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

<section class="form-section">
	<div class="container">
		<h1>Login-Form</h1>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="form">
					<form action="" method="POST">
						<h4>Login Admin</h4>
						<hr>
						<!-- how to use if conditon alert -->
						<?php if(isset($error)): ?>
							<div class="alert alert-danger">
								<?php echo $error; ?>
							</div>
						<?php endif; ?>

						<?php if(isset($success)): ?>
							<div class="alert alert-success">
								<?php echo $success; ?>
							</div>
						<?php endif; ?>	

						<!-- Condition close -->
						<div class="form-group">
							<label for="username" class="form-label">User Name</label>
							<input type="text" name="username" class="form-control" id="username" placeholder="Admin Username">
						</div>
						<div class="form-group">
							<label for="pass" class="form-label">Password</label>
							<input type="password" name="password" class="form-control" id="pass" placeholder="Password">
						</div>

						<div class="form-group">
							<button class="btn btn-success" name="login_btn">Login</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</section>

 <!-- JS FILES -->
  	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>
</html>