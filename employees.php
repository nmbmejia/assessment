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
	$sql = "SELECT * FROM users ";
	$result = mysqli_query($conn, $sql);
	?>


	<p> <a href="index.php"> Back to Home </a></p>

	<table border='2'>

		<tr>
			<td> ID </td>
			<td> Name </td>
			<td> Email </td>
			<td> Phone </td>
			<td> Details </td>
			<td> Update </td>
			<td> Delete </td>

		</tr>

 <?php 

 if (mysqli_num_rows($result) > 0){
 	while ($user = mysqli_fetch_assoc($result)){
 		?>

 		<tr>
 			<td><?php echo $user['id']; ?> </td>
 			<td><?php echo $user['name']; ?> </td>
 			<td><?php echo $user['email']; ?> </td>
 			<td><?php echo $user['phone']; ?> </td>
 			<td><a href="details.php? id=<?php echo $user['id'];?>"> Details </a> </td>
 			<td><a href="update.php? id=<?php echo $user['id'];?>"> Update </a> </td>
 			<td><a href="delete.php? id=<?php echo $user['id']; ?>"> Delete </a> </td>
 		</tr>

 		<?php 

 		}
 		} else {
 			echo  ' 0 results';
 		}

	?>
</table>


	

		

</body>
</html>













