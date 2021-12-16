<?php require 'conn.php'?>

<!DOCTYPE html>

<html>

 <head>
 		<meta charset="UTF-8">
	    <meta name="description" content="Web design and Development services">
        <meta name="keywords" content="HTML, CSS, JavaScript, php, laravel, jquery">
        <meta name="author" content="Marvin C. Tejol">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title> Register </title>

 </head>

 <body>

 	<?php 
	$sql = "SELECT * FROM data ";
	$result = mysqli_query($conn, $sql);
	?>


	<p> <a href="index.php"> Back to Home </a></p>

	<table style="min-width:300px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;">

		<tr>
			<td style="min-width:20px;width:80%;margin:5px auto auto auto;border:1px solid black;padding:5px;"> ID </td>
			<td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> First Name </td>
            <td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> Last Name </td>
            <td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;">Phone number </td>
			<td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> Email </td>
			<td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> Province</td>
			<td style="min-width:100px;width:30%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> City </td>
            <td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> Barangay </td>
			<td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> Street </td>
            <td style="min-width:100px;width:80%;margin:20px auto auto auto;border:1px solid black;padding:10px;"> Message </td>
            <td style="min-width:20px;width:80%;margin:10px auto auto auto;border:1px solid black;padding:10px;"> View </td>
			<td style="min-width:20px;width:80%;margin:10px auto auto auto;border:1px solid black;padding:10px;"> Update </td>
			<td style="min-width:20px;width:80%;margin:10px auto auto auto;border:1px solid black;padding:10px;"> Delete </td>
		</tr>

 <?php 

 if (mysqli_num_rows($result) > 0){
 	while ($data = mysqli_fetch_assoc($result)){
 		?>

 		<tr>
 			<td><?php echo $data['id']; ?> </td>
 			<td><?php echo $data['firstname']; ?> </td>
 			<td><?php echo $data['lastname']; ?> </td>
 			<td><?php echo $data['phone']; ?> </td>
 			<td><?php echo $data['email']; ?> </td>
 			<td><?php echo $data['province']; ?> </td>
 			<td><?php echo $data['city']; ?> </td>
 			<td><?php echo $data['brgy']; ?> </td>
			<td><?php echo $data['strt']; ?> </td>
            <td><?php echo $data['message']; ?> </td>

 			<td><a href="view.php? id=<?php echo $data['id'];?>"> View </a> </td>
 			<td><a href="update.php? id=<?php echo $data['id'];?>"> Update </a> </td>
 			<td><a href="delete.php? id=<?php echo $data['id']; ?>"> Delete </a> </td>


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