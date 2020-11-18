<?php require_once 'config.php' ?>
<?php 
	$st_id = $_REQUEST['id'];
	$statement = $pdo->prepare("DELETE FROM student_list WHERE id=?");
	$statement = $statement->execute(array($st_id));
	header('location:student-list.php?delsuccess'); 
?>