<?php require_once 'header.php' ?>
<?php require_once 'config.php' ?>

<section class="form-section">
	<div class="container">
		<h1>Search Student</h1>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Roll</th>
				      <th scope="col">Age</th>
				      <th scope="col">Mobile</th>
				      <th scope="col">Email</th>
				      <th scope="col">Address</th>
				      <th scope="col">Action</th>

				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	   
						$search = $_GET['search'];
						$statement = $pdo->prepare("SELECT * FROM student_list WHERE roll LIKE '$search' ");
						$statement->execute();
						$s_student = $statement->fetchAll(PDO::FETCH_ASSOC);
						$a=1;
				  	   foreach($s_student as $student_details):
				  	?>
				    <tr>
				      <td scope="row"><?php echo $a;$a++; ?></td>
				      <td><?php echo $student_details['name']; ?></td>
				      <td><?php echo $student_details['roll']; ?></td>
				      <td><?php echo $student_details['age']; ?></td>  
				      <td><?php echo $student_details['mobile']; ?></td>  
				      <td><?php echo $student_details['email']; ?></td>  
				      <td><?php echo $student_details['address']; ?></td>  
				      <td>
				      	<a href="view.php?s_id=<?php echo $student_details['id'];?>" class="btn btn-primary">View</a>
				      	<a href="update.php?id=<?php echo $student_details['id']; ?>" class="btn btn-info">Edit</a>
				      	<a href="delete.php?id=<?php echo $student_details['id']; ?>" class="btn btn-danger">Delete</a>
				      </td>
				    </tr>

				<?php endforeach; ?>
			
				  </tbody>
				</table>
			</div>	
		</div>
	</div>
</section>

<?php require_once 'footer.php' ?>