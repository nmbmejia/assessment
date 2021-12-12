<?php require 'conn.php'?>

<!DOCTYPE html>

<html>

 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
 	<title> Register </title>

 </head>

 <body>
    <nav class="navigation-bar">
        <img src="assets/logo.png">
        <ul> 
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>

        </ul>
    </nav>

    <div class="content">
        <section>
            <div class="navigation-image">
                <img src="assets/navigation-image.jpg">
            </div>
        </section>
        <section class="welcome-message">
            <p>Korea Tour</p>
            <h1> Responsive layouts don't<br> have to be a struggle</h1>

        </section>
        <section class="cards">  
            <div class="card">
                <img src="assets/rand1.jpg"/>
                <p>Old Temple</p>
            </div>
            <div class="card">
                <img src="assets/rand2.jpg"/>
                <p>Bongeunsa</p>
            </div>
            <div class="card">
                <img src="assets/rand3.jpg"/>
                <p>Nami Island</p>
            </div>
        </section>
    </div>
    

    <footer class="footer">
        <img src="assets/logo.png">

        <p class="footer-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact Us</a>
        </p>
        <br>
        <p class="studio">Neil.Studios @ 2021</p>
    </footer>
    

 	<!--<p> <a href="employees.php"> Employees List </a></p>

	<form method="POST">
  	 Name: <input type="text" name="name" required><br>
     Email: <input type="email" name="email"required><br>
     Phone: <input type="tel" name="phone" required> <br>
    <input type="submit" name="Register" value="Register Now!">
     </form>

-->
	<?php

		if( isset($_POST['Register'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			
			$sql = "INSERT INTO users (name,email,phone) VALUES ('$name','$email', '$phone')";


			if (mysqli_query($conn, $sql)) {
				echo "<script> alert('record created successfuly'); </script>" ;
			} else {
				echo "<script> alert('error: unsucessful'); </script>";
			}

			}
		?>

		

</body>
</html>













