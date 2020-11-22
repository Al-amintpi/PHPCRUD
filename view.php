 <?php require_once 'header.php' ?>
<?php require_once 'config.php' ?>

<?php

	$st_id = $_REQUEST['s_id'];
	$statement = $pdo->prepare("SELECT * FROM student_list WHERE id=?");
	$statement->execute(array($st_id));
	$st_details = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($st_details as $singlestudent) {
		 $name = $singlestudent['name'];
		 $roll = $singlestudent['roll'];
		 $age = $singlestudent['age'];
		 $mobile = $singlestudent['mobile'];
		 $email = $singlestudent['email'];
		 $address = $singlestudent['address'];
		 $date_time = $singlestudent['date_time'];
	}

?>

<section class="form-section">
	<div class="container">
		<h1 class="text-center"><?php echo $name; ?> Details</h1>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<td><?php echo $name; ?></td>
					</tr>
					<tr>
						<th>Roll</th>
						<td><?php echo $roll; ?></td>
					</tr>
					<tr>
						<th>Age</th>
						<td><?php echo $age ?></td>
					</tr>
					<tr>
						<th>Mobile-number</th>
						<td><?php echo $mobile ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?php echo $email; ?></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><?php echo $address; ?></td>
					</tr>
					<tr>
						<th>Register Date-Time</th>
						<td><?php echo $date_time; ?></td>
					</tr>
				</table>
			</div>	
		</div>
	</div>
</section>

<?php require_once 'footer.php' ?>