<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 30px;
  width:40%;
height:695px;
opacity:0.9;
}
body {
  background-image: url("https://assets.keap.com/image/upload/b_rgb:FFFFFF,c_limit,dpr_1,f_auto,h_395,q_95,w_569/v1/learn/images/Zz02ZTdiNjY2MDRjZjBjYjg2ZTQ0NzI3OGQ3M2QyMTE5Ng==.jpg");
  background-repeat: no-repeat;
background-size: cover;
}
</style>
</head>
<body>
<br>
<br><br><br>


<div class="container">
  <form action="contact_fun.php" method="POST">
    <label for="fname">NAME</label>
    <input type="text" id="name" name="name" placeholder="Your name..">
<label for="fname">EMAIL</label>
    <input type="text" id="email" name="email" placeholder="Your mail to contact..">
    <label for="lname">PHONE NUMBER</label>
    <input type="text" id="number" name="number" placeholder="Your number..">

    <label for="lname">PLACE</label>
    <input type="text" id="country" name="country" placeholder="Your place..">

    <label for="subject">COMMENTS</label>
    <textarea id="comments" name="comments" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
