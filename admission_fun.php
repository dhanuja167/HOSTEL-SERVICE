<?php
$email	= $_POST['email'];
$reg_no  = $_POST['reg_no'];
$roll_no = $_POST['roll_no'];
$department  = $_POST['department'];
$year	= $_POST['year'];
$name  = $_POST['name'];
$contact = $_POST['contact'];
$parent  = $_POST['parent'];
$p_contact = $_POST['p_contact'];
$address  = $_POST['address'];
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "hostel";  
$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "insert into admission(email,reg_no,roll_no,department,year,name,contact,parent,p_contact,address) values('$email','$reg_no','$roll_no','$department','$year','$name','$contact','$parent','$p_contact','$address')";

if(mysqli_query($con,$sql))
	echo "student details added";
else
	echo "Connection failed".mysqli_error($con);
?>