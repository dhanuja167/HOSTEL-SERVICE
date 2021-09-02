<?php      
    include('db_connection.php');  
    $uname = $_POST['uname'];  
    $psw = $_POST['psw'];  
	//to prevent from mysqli injection  
    $uname = stripcslashes($uname);  
    $psw = stripcslashes($psw);  
    $uname = mysqli_real_escape_string($con, $uname);  
    $psw = mysqli_real_escape_string($con, $psw);  
	
        $sql = "select *from admin where uname = '$uname' and psw = '$psw'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
            header('location:addashboard.php');  
        }  
		else{  
            header('location:invalidadmin.php');  
        }
          
	
	   
?>  