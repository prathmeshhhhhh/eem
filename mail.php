<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$message = $_POST['message'];
$description = $_POST['description'];
$uemail = $_POST['email'];
$query = "SELECT email FROM organizers WHERE id=$id";
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));
$email = $row['email'] ;
$query = "INSERT INTO contact(organizer,name,phone,date,email,description,message) VALUES ($id,'$name','$phone','$date','$email','$description','$message')";
if(mysqli_query($conn,$query)){

	$mail = new PHPMailer(false);                              // Passing `true` enables exceptions
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'e.eventmng@gmail.com';                 // SMTP username
	$mail->Password = 'Project.6969';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	//Recipients
	$mail->setFrom($email, 'Event');
	$mail->addAddress($email);     // Add a recipient

	//Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Contact';
	$mail->Body    = "<b>Name: </b> $name<br><b>Email: </b> $uemail<br><b>Phone: </b> $phone<br><b>Date: </b> $date<br><b>Description: </b> $description<br><b>Message: </b> $message<br>";

	if($mail->send())
		$msg = "Your Information is submitted";
	else
		
	die("There was a problem while submitting information. Please Try again later");
}
?>

<script>
alert('<?php echo $msg?>');
window.location.href= 'index.php';
</script>