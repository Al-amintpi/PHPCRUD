<?php

if(isset($_POST['upload_photo'])){
	$photo = $_FILES['profile'];
	$photo_name = $_FILES['profile']['name'];
	$tmp_name = $_FILES['profile']['tmp_name'];
	$size = $_FILES['profile']['size'];
	print_r($photo);
	$extension = pathinfo($photo_name, PATHINFO_EXTENSION);

	if ($extension !='png' and $extension !='PNG' AND $extension !='JPG' AND $extension !='jpg' and $extension !='jpeg' and $extension !='jpeg' and $extension !='gif' and $extension !='GIF') {
		 echo("<p style='color:red'> Please Right file type </p>");
	}else if($size >= 1048576){
			echo("<p style='color:red'>File too large. File must be less than 1 megabytes </p>");
	}
	else{
		$new_name = time().".".$extension;
		$move = move_uploaded_file($tmp_name, 'images/'.$new_name);
		if($move == true){
			echo "uploaded successfully";
		}
	}
	


}
 
?>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="profile"><br><br>
	<input type="submit" name="upload_photo">
</form>