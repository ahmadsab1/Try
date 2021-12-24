<?php

$connect = mysql_connect('localhost','root','root','epiz_27050778_sabbahgraphic');

$name = $_POST['name'];
$visitor_email= $_POST['email'];
$message = $_POST['message'];
	
	
	
	
	
	$email_from = 'sabbahgraphic@sabbahahmad.com';
    

    $email_subject = 'New Form Submission';

    

    $email_body = "User Name: $name.\n".
		           "User Email: $visitor_email.\n".
		              "User Message: $message.\n";




$to = "ahmadsab305@gmail.com";
		    
$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:message.html");


?>