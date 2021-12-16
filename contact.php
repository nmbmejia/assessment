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
 	<title> Contact Us </title>

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
        <section class="contact-form">
            <form method="post" action="" id="ContactUs">
                <h1>Personal Information</h1>

                <input type="text" name="firstname" placeholder="First Name"/><br>
                <input type="text" name="lastname" placeholder="Last Name"/><br>
                <input type="text" name="organization" placeholder="Organization"/><br>
                <input type="email" name="email" placeholder="Email"/><br>
                <input type="text" name="phone" placeholder="Phone Number"/><br>

                <h1>Address Details</h1>
                <select name="region" id="region">
                        <?php
                            $sql= "SELECT * FROM location ORDER BY region";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                        ?>
                            <option value="<?= $row['id'];?>"><?= $row['region'];?></option>
                        <?php }?> 
                </select><br>

                <select name="province" id="province">
                        <?php
                            $sql= "SELECT * FROM location ORDER BY province";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                        ?>
                            <option value="<?= $row['id'];?>"><?= $row['province'];?></option>
                        <?php }?> 
                </select><br>

                <select name="city" id="city">
                        <?php
                            $sql= "SELECT * FROM location ORDER BY city";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                        ?>
                            <option value="<?= $row['id'];?>"><?= $row['city'];?></option>
                        <?php }?> 
                </select><br>
                <select name="barangay" id="barangay">
                        <?php
                            $sql= "SELECT * FROM location ORDER BY brgy";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                        ?>
                            <option value="<?= $row['id'];?>"><?= $row['brgy'];?></option>
                        <?php }?> 
                </select><br>
                <input type="text" name="strt" placeholder="Street"/><br>

                <h1>Message/Comment</h1>
                <textarea name="message" rows="10" cols="40" placeholder="Enter text here..."></textarea><br>

                <input type="submit" value="Send Message">
            </form>
        </section>

        <p> <a href="services/display.php"> View messages </a></p>
        
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
    

    <?php
        if(isset($_POST ['firstname'])){
            $firstname = $_POST ['firstname'];
            $lastname = $_POST ['lastname'];
            $phone = $_POST ['phone'];
            $email = $_POST ['email'];
            $province = $_POST ['province'];
            $city = $_POST ['city'];
            $brgy = $_POST ['brgy'];
            $strt = $_POST ['strt'];
            $message = $_POST ['message'];

            $sql = "INSERT INTO data (firstname,lastname,phone,email,province,city,brgy,strt, message) VALUES ('$firstname','$lastname','$phone','$email','$province','$city','$brgy','$strt','$message') ";
        
            if (mysqli_query($conn, $sql)) {
                echo "<script> alert('record created successfuly'); </script>" ;
            } else {
                echo "<script> alert('error: unsucessful'); </script>";
            }
        }

    ?>
		

</body>
</html>













