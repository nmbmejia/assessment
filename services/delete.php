<?php require 'conn.php';

$id = $_GET['id'];
$sql = "DELETE FROM data WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
	header('Location: display.php');
}else {
	echo "Error deleting record!" . mysqli_error($conn);
}

?>