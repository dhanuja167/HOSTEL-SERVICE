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
    <a href="#home" class="w3-bar-item w3-button"><b><img src="TCE.jpg" class="logo" alt="logo"> TCE <i>HOSTEL SERVICE</i></b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
<div class="w3-content w3-section" style="max-width:1500px">
 <img class="mySlides" src="https://images.unsplash.com/photo-1593692867948-bb6ba7c03fd1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8a29kYWlrYW5hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" style="width:100%;height:750px">
<img class="mySlides" src="https://renghaholidays.com/assets/images/tour/1590302774_18414f478a269f2cb4dd.jpg" style="width:100%;height:750px"></a>
  <img class="mySlides" src="https://static.toiimg.com/photo/msid-58640314,width-96,height-65.cms" style="width:100%;height:750px">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 7 seconds
}
</script>
<div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>TCE</b></span> <span class="w3-hide-small w3-text-white"> HOSTEL MANAGEMENT SERVICE</span></h1>

    <button class="button0 button1" onclick="document.location='http://localhost:8080/hostel/admin.php'"><b>ADMIN LOGIN</b></button>
<button class="button0 button2" onclick="document.location='http://localhost:8080/hostel/student.php'"><b>STUDENT LOGIN</b></button>
</div>
</header>
<style>

  .button0 {
  background-color: black; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color:white; 
  color: black; 
  border: 2px solid white;
  opacity: 0.6;
}

.button1:hover {
  background-color: black;
  border: 2px solid black;
  color: white;
}
.button2 {
  background-color: white;
  color: black;
  border: 2px solid white;
   opacity: 0.6
}

.button2:hover {
  background-color: black;
  border: 2px solid black;
  color: white;
}

</style>

<body>


<!-- End page content -->
</div>



</body>
</html>
