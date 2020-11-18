<?php require_once 'header.php' ?>
<?php require_once 'config.php' ?>

<?php

if(isset($_POST['st_submit'])){
	$name = $_POST['st_name'];
	$roll = $_POST['st_roll'];
	$age = $_POST['st_age'];
	$mobile = $_POST['st_mobile'];
	$email = $_POST['st_email'];
	$address = $_POST['st_address'];
	$date_time = date('Y-m-d H-i-s');
	 
	$mobile_count = inputCount('mobile', $mobile);
	$email_count = inputCount('email', $email);
	$rolll_count = inputCount('roll', $roll);

	if (empty($name)) {
		$error = "Name is required";
	}
	// roll number validation
	else if (empty($roll)) {
		$error = "Roll is required";
	}
	else if ($rolll_count == 1) {
		$error = "Roll number is alreay exits";
	}
	else if (!is_numeric($roll)) {
		$error = "Roll Number must be number";
	}
	// Age validation
	else if (empty($age)) {
		$error = "Age is required";
	}
	else if (!is_numeric($age)) {
		$error = "Age must be number";
	}
	// mobile number verify	
	else if (empty($mobile)) {
		$error = "Mobile number required";
	}
	else if (!is_numeric($mobile)) {
		$error = "Mobile number must be Number";
	}
	else if (strlen($mobile) !=11) {
		$error = "Mobile number must be 11 digit";
	}
	else if ($mobile_count == 1) {
		$error = "Mobile Number alreay exits";
	}
	// Email validation
	else if (empty($email)) {
		$error = "Email is required";
	}
	else if ($email_count == 1) {
		$error = "Email alreay exits";
	}
	else if (empty($address)) {
		$error = "address is required";
	}
	else{

	$statement = $pdo->prepare("INSERT INTO student_list(name,roll,age,mobile,email,address,date_time)VALUES(?,?,?,?,?,?,?)");
	$statement->execute(array($name, $roll, $age, $mobile, $email, $address, $date_time));
	$success = "Registration successfull";
	}
}

?>

<section class="form-section">
	<div class="container">
		<h1>Register-Form</h1>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="form">
					<form action="" method="POST">
						<h4>Student Registration</h4>
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
							<label for="exampleFormControlInput1" class="form-label">Name</label>
							<input type="text" name="st_name" class="form-control" id=" " placeholder="Plz name" value="<?php 
							 	if(isset($_POST['st_name'])){
							 		echo $_POST['st_name'];
							 	}
							 ?>">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Roll</label>
							<input type="text" name="st_roll" class="form-control" id=" " placeholder="Roll">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Age</label>
							<input type="text" name="st_age" class="form-control" id=" " placeholder="Age">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Phone</label>
							<input type="text" name="st_mobile" class="form-control" id=" " placeholder="Phone">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Email</label>
							<input type="email" name="st_email" class="form-control" id=" " placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Address</label>
							<input type="text" name="st_address" class="form-control" id=" " placeholder="Address">
						</div>
						<div class="form-group">
							<button class="btn btn-success" name="st_submit">Submit</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</section>

<?php require_once 'footer.php' ?>