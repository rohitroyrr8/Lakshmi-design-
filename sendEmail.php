
<!DOCTYPE html>
<html>
<head>
	<title>sendEmail</title>
</head>
<body>
<h1>fdf</h1>
<?php

 if(isset($_REQUEST["log"]))
  {
  	
  	$name = $_REQUEST["name"];
  	$phone = $_REQUEST["phone"];
  	$email = $_REQUEST["email"];
  	$msg = $_REQUEST["msg"];

  	$to = "bnsingh111250@gmail.com";
  	$subject= "Request for call back";
  	$message ="Name : ".$name."\n".$phone."\n"."Message Here: "."\n".$msg;
  	$header = "From ".$email;

  mail($to, $subject, $message, $header);
  }  ?>
</body>
</html>