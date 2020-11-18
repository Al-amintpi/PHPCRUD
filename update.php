<?php require_once 'header.php' ?>
<?php require_once 'config.php' ?>

<?php 
	
	$st_id = $_REQUEST['id'];
	$statement = $pdo->prepare("SELECT * FROM student_list WHERE id=?");
	$statement->execute(array($st_id));
	$sst_details = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach($sst_details as $single_details){
		$name = $single_details['name'];
		$roll = $single_details['roll'];
		$age = $single_details['age'];
		$mobile = $single_details['mobile'];
		$email = $single_details['email'];
		$address = $single_details['address'];
		 
	}

?>

<?php
	$st_id = $_REQUEST['id']; 
	if(isset($_POST['st_update'])){
		$name = $_POST['st_name'];
		$roll = $_POST['st_roll'];
		$age = $_POST['st_age'];
		$address = $_POST['st_address'];

		if(empty($name)){
			$error = "Name is required";
		}
		// roll validation
		else if (empty($roll)) {
			$error = "Roll is required";
		}
		else if (!is_numeric($age)){
			$error="Roll Number is must be number";
		}
		// Age validation
		else if (empty($age)) {
			$error = "Age is required";
		}
		else if (!is_numeric($age)){
			$error="Age is must be number";
		}
		// Mobile validation
		else if (empty($address)) {
			$error = "Address is required";
		}else{
			$statement =$pdo->prepare("UPDATE student_list SET name=?,roll=?,age=?,address=? WHERE id=?");
			$statement->execute(array($name,$roll,$age,$address, $st_id));
			$success = 'Updated Successfully!'; 
		}
		
	}
 

?>

<section class="form-section">
	<div class="container">
		<h1>Update Form</h1>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="form">
					<form action="" method="POST">
						<h4><?php echo $name; ?> detals update</h4>
						<hr>
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
							<input type="text" name="st_name" class="form-control" id=" " placeholder="Plz name" value="<?php echo $name; ?>">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Roll</label>
							<input type="text" name="st_roll" class="form-control" id=" " placeholder="Roll" value="<?php echo $roll; ?>">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Age</label>
							<input type="text" name="st_age" class="form-control" id=" " placeholder="Age" value="<?php echo $age; ?>">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Phone</label>
							<input type="text" name="st_mobile" class="form-control" id=" " placeholder="Phone" value="<?php echo $mobile; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Email</label>
							<input type="email" name="st_email" class="form-control" id=" " placeholder="Email" value="<?php echo $email; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" class="form-label">Address</label>
							<input type="text" name="st_address" class="form-control" id=" " placeholder="Address" value="<?php echo $address; ?>">
						</div>
						<div class="form-group">
							<button class="btn btn-success" name="st_update">Update</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</section>



<?php require_once 'footer.php' ?>