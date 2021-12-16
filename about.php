<?php require 'services/conn.php'?>

<!DOCTYPE html>

<html>

 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web design and Development services">
    <meta name="keywords" content="HTML, CSS, JavaScript, php, laravel, jquery">
    <meta name="author" content="Marvin C. Tejol">
    <link rel="stylesheet" href="style.css">
 	<title> About </title>

 </head>

 <body class="main-body">
    <nav class="navigation-bar">
        <img src="assets/logo.png">
        <ul> 
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>

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
        <section class="about-us">
            <h1>About Us</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci. Integer hendrerit ante ut placerat cursus.
            </p>
            <p class="dark">
                Aliquam eget pharetra diam. Nulla placerat lorem at turpis tempor, vel ultrices dui tincidunt. Proin quis egestas lorem. Mauris vehicula lectus odio, sit amet dictum justo feugiat a. Praesent id dictum lacus. Sed ullamcorper id erat ut dictum. Fusce porttitor lorem sapien, in aliquet sapien convallis et. Donec nec mauris nulla. Curabitur cursus semper odio, et hendrerit ante. Nunc at cursus ante. Maecenas gravida ligula ut efficitur suscipit. Nulla id turpis varius, pretium nunc sed, fermentum sem. Sed lacinia nunc non interdum pellentesque.
            </p>
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













