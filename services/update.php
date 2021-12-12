<?php require 'conn.php'?>

<!DOCTYPE html>

<html>

 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title> Register </title>

 </head>

 <body>

 	<?php 
 	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id='$id' ";
	$result = mysqli_query($conn, $sql);
	?>

	
	<p><a href="employees.php"> Back to employees list </a></p>

	<form action="" method="POST">

 <?php 

 if (mysqli_num_rows($result) > 0){
 	while ($user = mysqli_fetch_assoc($result)){
 		?>

  	 Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
     Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
     Phone: <input type="tel" name="phone" value="<?php echo $user['email']; ?>" required> <br>
    		<input type="submit" name="Update" value="Update Now!">
     </form>

 		<?php 


 		}
 		} else {
 			echo  ' 0 results';
 		}

 		?>

 		<?php 


		if( isset($_POST['Update'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			
			$sql = "UPDATE users SET name='$name' , email='$email', phone='$phone' WHERE id='$id' ";

			if (mysqli_query($conn, $sql)) {
		header('Location: employees.php');
		}else {
		echo "Error updating record!" . mysqli_error($conn);
		}
	}

 	?>



	

		

</body>
</html>













