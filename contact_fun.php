<?php
$name	= $_POST['name'];
$email  = $_POST['email'];
$number = $_POST['number'];
$country  = $_POST['country'];
$comments	= $_POST['comments'];
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "hostel";  
$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "insert into contact(name,email,number,country,comments) values('$name','$email','$number','$country','$comments')";

if(mysqli_query($con,$sql))
	header('location:responsecontact.php');
else
	echo "Connection failed".mysqli_error($con);
?>