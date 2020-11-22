<?php require_once 'header.php' ?>
<?php require_once 'config.php'?>



<section class="search-section">
	<form action="search.php" method="GET">
		<input type="text" name="search" placeholder="Text here..">
		<input type="submit" value="search" name="submit">
	</form>
	 
</section>

<section class="form-section">
	<div class="container">
		<h1>All Student-list</h1>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
				  <thead class="thead-dark">
				  	<div class="alert alert-success">
				  		 <h1>Welcome By <?php echo $_SESSION['newadmin'][0]['name'] ?></h1>
				  	</div>
				  	<?php if(isset($_GET['delsuccess'])): ?>
				  		<div class="alert alert-success">
				  			Student Delete Successfull.
				  		</div>
				  	<?php endif; ?>	

				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Roll</th>
				      <th scope="col">Age</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	   $statement = $pdo->prepare("SELECT * FROM student_list");
				  	   $statement->execute();
				  	   $st_list = $statement->fetchAll(PDO::FETCH_ASSOC);
				  	   $a=1;
				  	   foreach ($st_list as $single_list) :
				  	?>
				    <tr>
				      <td scope="row"><?php echo $a;$a++; ?></td>
				      <td><?php echo $single_list['name']; ?></td>
				      <td><?php echo $single_list['roll']; ?></td>
				      <td><?php echo $single_list['age']; ?>Years</td>  
				      <td>
				      	<a href="view.php?s_id=<?php echo $single_list['id'];?>" class="btn btn-primary">View</a>
				      	<a href="update.php?id=<?php echo $single_list['id']; ?>" class="btn btn-info">Edit</a>
				      	<a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $single_list['id']; ?>" class="btn btn-danger">Delete</a>
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