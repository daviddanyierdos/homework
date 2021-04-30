

<?php

// check name
if(!isset($_POST['name']) || strlen($_POST['name']) < 8 || strlen($_POST['name']) > 30)
{
	$error[] = "Wrong name!";
} else {
	$data[] = "Name: " .$_POST["name"];
}

// check e-mail
$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
{
	$error[] = "Wrong e-mail!";
} else {
	$data[] = "E-mail: " .$_POST["email"];
}

// check text
if(!isset($_POST['text']) || empty($_POST['text']))
{
	$error[] = "Wrong text!";
} else {
	$data[] = "Message: " .$_POST["text"]; 
}

?>


