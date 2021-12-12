<?php require 'conn.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
	header('Location: employees.php');
}else {
	echo "Error deleting record!" . mysqli_error($conn);
}



?>