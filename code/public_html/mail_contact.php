<?php  

$to = "shri@codeshri.com";
$subject = $_POST['sub'];
$name = $_POST['name'];
$mesg = $_POST['msg'];
$message = "Name : ".$name."".PHP_EOL." Message : ".$mesg;
$message = nl2br($message);
$from = $_POST['email'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$from.'>' . "\r\n";
mail($to,$subject,$message,$headers);
header("location:index.php?success=yes#contact");
exit;
?>