<?php require_once 'header.php' ?>
<?php require_once 'config.php' ?>

<section class="form-section">
	<div class="container">
		<h1>All Student-list</h1>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Roll</th>
				      <th scope="col">Age</th>
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
				      <th scope="row"><?php echo $a;$a++; ?></th>
				      <td><?php echo $single_list['name']; ?></td>
				      <td><?php echo $single_list['roll']; ?></td>
				      <td><?php echo $single_list['age']; ?></td>
				    </tr>

				<?php endforeach; ?>

				  </tbody>
				</table>
			</div>	
		</div>
	</div>
</section>

<?php require_once 'footer.php' ?>