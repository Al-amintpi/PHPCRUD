<?php require_once 'header.php' ?>
<?php require_once 'config.php' ?>

<?php

if(isset($_POST['st_submit'])){
	$name = $_POST['st_name'];
	$roll = $_POST['st_roll'];
	$age = $_POST['st_roll'];

	if (empty($name)) {
		$error = "Name is required";
	}elseif (empty($roll)) {
		$error = "Roll is required";
	}elseif (empty($age)) {
		$error = "Age is required";
	}else{

		$statement = $pdo->prepare("INSERT INTO student_list(name,roll,age)VALUES(?,?,?)");
		$statement->execute(array($name,$roll,$age));
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
							<input type="text" name="st_name" class="form-control" id=" " placeholder="please name">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Roll</label>
							<input type="text" name="st_roll" class="form-control" id=" " placeholder="Roll">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Age</label>
							<input type="text" name="st_age" class="form-control" id=" " placeholder="Age">
						</div>
						<!-- <div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Email</label>
							<input type="email" name="st_email" class="form-control" id=" " placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Phone</label>
							<input type="text" name="st_phone" class="form-control" id=" " placeholder="Phone">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">address</label>
							<input type="text" name="st_address" class="form-control" id=" " placeholder="addrss">
						</div> -->
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