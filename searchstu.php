<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "hostel";  
$con = mysqli_connect($host, $user, $password, $db_name); 
$sql = "SELECT email,reg_no,roll_no,department,year,name,contact,parent,p_contact,address from admission WHERE reg_no='search'";

$rs = mysqli_query($con, $sql);

if(!$rs ) 
{
      die('Selection failure: ' . mysql_error());
} 
$row = mysqli_fetch_array($rs);

while($row){
echo "EMAIL: ".$row["email"]."-reg_no: ".$row["reg_no"]."<br>";
$row = mysqli_fetch_array($rs);
}
?>