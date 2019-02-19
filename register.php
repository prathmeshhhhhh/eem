<?php
include 'db.php';
$name = $_POST['name'];
$address = $_POST['address'];
$password = hash('sha512', $_POST['password']);
$phone = $_POST['phone'];
$category = $_POST['category'];
$email = $_POST['email'];
$description = $_POST['description'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$query = "INSERT INTO organizers(name,address,password,phone,category,email,description,image) VALUES('$name','$address','$password','$phone','$category','$email','$description','$image')";
if(mysqli_query($conn,$query))
	$msg = "Registration Successfull";
else
	$msg = "Registration Failed";
?>
<script>
alert('<?php echo $msg?>');
window.location.href= 'contact.php';
</script>