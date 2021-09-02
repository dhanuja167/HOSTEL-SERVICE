<?php
$a	= $_POST['firstname'];
$b  = $_POST['email'];
$c  = $_POST['address'];
$d  = $_POST['city'];
$e  = $_POST['state'];
$f  = $_POST['cardname'];
$g  = $_POST['cardnumber'];
$h  = $_POST['expmonth'];
$i  = $_POST['expyear'];
$j  = $_POST['cvv'];
$k  = $_POST['sameadr'];

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "hostel";  
$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "insert into payment(firstname ,email ,address ,city ,state, cardname, cardnumber, expmonth, expyear, cvv, sameadr) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";

if(mysqli_query($con,$sql))
	header('location:responsepayment.php');
else
	echo "Connection failed".mysqli_error($con);
?>