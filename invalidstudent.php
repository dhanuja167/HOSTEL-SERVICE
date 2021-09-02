<!DOCTYPE html>
<html>
<title>TCE HOSTEL</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-opacity-min">
    <a href="http://localhost:8080/hostel/BCL%20-%20Copy.php" class="w3-bar-item w3-button"><b><img src="TCE.jpg" class="logo" alt="logo"> TCE <i>HOSTEL SERVICE</i></b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #ADD8E6;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
opacity: 0.8;
}

button:hover {
background-color: black;
  border: 2px solid white;
  color: white;
  opacity: 0.6;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: red;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(5,12,0.5,0.4); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<body>
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" >
  <img class="w3-image" src="https://www.sangath.org/uploads/images/1535112763_3-IIMB-VP.jpg"  width="1500" height="1500">
<div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>TCE</b></span> <h1 class="w3-xlarge w3-text-black"><span class="w3-padding w3-white w3-opacity-min"><b>HOSTEL MANAGEMENT SERVICE WELCOMES YOU! IF YOU ARE A STUDENT</b></span></h1>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i>LOGIN AS HOSTELLAR</i></button>
<h6 span class="w3-padding w3-red w3-opacity-min">invalid username or password!! please try again!!</span></h6>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="stu_login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="data:image/png;base64,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" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:powderblue">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<!-- Header -->

<!-- End page content -->




</body>
</html>