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
 	$id = $_GET['id'];
	$sql = "SELECT * FROM data WHERE id='$id' ";
	$result = mysqli_query($conn, $sql);
	?>

	
	<p><a href="display.php"> Back to the list </a></p>

	<form action="" method="POST">

        <?php 

        if (mysqli_num_rows($result) > 0){
            while ($data = mysqli_fetch_assoc($result)){
                ?>

            First Name: <input type="text" name="firstname" value="<?php echo $data ['firstname']; ?>" required><br><br>
            Last Name: <input type="text" name="lastname" value="<?php echo $data ['lastname']; ?>" required><br><br>
            Phone number: <input type="text" name="phone" value="<?php echo $data ['phone']; ?>" required><br><br>
            E-mail add: <input type="text" name="email" value="<?php echo $data ['email']; ?>" required><br><br>
            Province: <input type="text" name="province" value="<?php echo $data ['province']; ?>" required><br><br>
            City: <input type="text" name="city" value="<?php echo $data ['city']; ?>" required><br><br>
            Barangay: <input type="text" name="brgy" value="<?php echo $data ['brgy']; ?>" required><br><br>
            Street: <input type ="text" name="strt" value="<?php echo $data ['strt']; ?>" required><br><br>
            Message: <input type ="text" name="message" value="<?php echo $data ['message']; ?>" required><br><br>
                        <input type="submit" name="Update" value="Update Now!">

     </form>
     <?php 

 		}
 		} 
         
         else {
 			echo  ' 0 results';
 		}

 		?>

 		<?php 
		if( isset($_POST['Update'])) {
			    $firstname = $_POST ['firstname'];
                $lastname = $_POST ['lastname'];
                $phone = $_POST ['phone'];
                $email = $_POST ['email'];
                $province = $_POST ['province'];
                $city = $_POST ['city'];
                $brgy = $_POST ['brgy'];
                $strt = $_POST ['strt'];
                $message = $_POST ['message'];
                
                $sql = "UPDATE data SET firstname=' $firstname' , lastname='$lastname', phone='$phone', email='$email', province='$province',city='$city', brgy='$brgy', strt='$strt', message='$message' WHERE id='$id' ";
                

			if (mysqli_query($conn, $sql)) {
                header('Location: display.php');
                }
            else {
		echo "Error updating record!" . mysqli_error($conn);
		}
        
	 }

 	  ?>

</body>
</html>













