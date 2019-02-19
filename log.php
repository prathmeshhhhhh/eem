<?php
include 'db.php';
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = hash("sha512",mysqli_real_escape_string($conn, $_POST['password']));
$query = "SELECT * FROM organizers WHERE email='$email' AND password='$password'";
$res = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn)>0){
	session_start();
	$row = mysqli_fetch_assoc($res);
	$_SESSION['id'] = $row['id'];
	header("location:console.php");
}
?>