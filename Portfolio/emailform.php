<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$to = "dul******@icloud.com";
$headers = "From: ".$email;
$subject = "You have received an e-mail from " .$name. ".\n\n" .$message;
$body = "This is an automated message. \n\n Message: \n $message";

    //the mail function
mail($to,$subject,$message,$headers);

header("Location: contact.php?mailsend");

}
?>
