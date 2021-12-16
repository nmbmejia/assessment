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

	
	<p> <a href="display.php">back to the list </a></p>

	<ul>


 <?php 

        if (mysqli_num_rows($result) > 0){
            while ($data = mysqli_fetch_assoc($result)){
                ?>
                    <li>ID: <?php echo $data['id']; ?> </li>
                    <li>First name: <?php echo $data['firstname']; ?> </li>
                    <li>Last name: <?php echo $data['lastname']; ?> </li>
                    <li>Phone number: <?php echo $data['phone']; ?> </li>
                    <li>E-mail: <?php echo $data['email']; ?> </li>
                    <li>Province: <?php echo $data['province']; ?> </li>
                    <li>City: <?php echo $data['city']; ?> </li>
                    <li>Barangay: <?php echo $data['brgy']; ?> </li>
                    <li>Street: <?php echo $data['strt']; ?> </li>
                    <li>Message: <?php echo $data['message']; ?> </li>
                <?php 

                }
                } else {
                    echo  ' 0 results';
                }

	?>
</ul>


</body>
</html>

