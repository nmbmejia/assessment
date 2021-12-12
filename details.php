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

	
	<p> <a href="employees.php">back to employees list </a></p>

	<ul>


 <?php 

 if (mysqli_num_rows($result) > 0){
 	while ($user = mysqli_fetch_assoc($result)){
 		?>

 		<li> Name: <?php echo $user['name'];?></li>
 		<li> Email: <?php echo $user['email'];?></li>
 		<li> Phone: <?php echo $user['phone'];?></li>

 		<?php 

 		}
 		} else {
 			echo  ' 0 results';
 		}

	?>
</ul>



	

		

</body>
</html>













