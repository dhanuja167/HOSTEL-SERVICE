<?php
$a	= $_POST['NAME'];
$b  = $_POST['regno'];
$c  = $_POST['rollno'];
$d  = $_POST['year'];
$e  = $_POST['department'];
$f  = $_POST['contact'];
$g  = $_POST['parentcontact'];
$h  = $_POST['leavingdate'];
$i  = $_POST['returndate'];
$j  = $_POST['address'];

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "hostel";  
$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "insert into leaving(NAME,regno,rollno,year,department,contact,parentcontact,leavingdate,returndate,address) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";


if(mysqli_query($con,$sql))
	header('location:responseleavingrequest.php');
else
	echo "Connection failed".mysqli_error($con);
?>
