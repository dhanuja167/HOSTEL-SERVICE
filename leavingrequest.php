<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TCE HOSTEL</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  left : 25%;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 500px) {
  .col-25, .col-75, input[type=submit] {
    width: 75%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<br><br><br>
<div class="container">
  <form action="leave.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="name">NAME</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="NAME" placeholder=" Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="regno">REGISTER NO</label>
      </div>
      <div class="col-75">
        <input type="text" id="regno" name="regno" placeholder="Your reg no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="rollno">ROLL NO</label>
      </div>
      <div class="col-75">
        <input type="text" id="rollno" name="rollno" placeholder="Your roll no..">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="year">YEAR</label>
      </div>
      <div class="col-75">
        <input type="text" id="year" name="year" placeholder="Year..">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="year">DEPARTMENT</label>
      </div>
      <div class="col-75">
        <input type="text" id="dept" name="department" placeholder="Department..">
      </div>
    </div>

    
    <div class="row">
      <div class="col-25">
        <label for="contact">CONTACT</label>
      </div>
      <div class="col-75">
        <input type="text" id="contact" name="contact" placeholder="Your contact no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="parent contact">PARENT CONTACT</label>
      </div>
      <div class="col-75">
        <input type="text" id="parent contact" name="parentcontact" placeholder="parent contact no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="ldate">LEAVING DATE</label>
      </div>
      <div class="col-75">
        <input type="text" id="ldate" name="leavingdate" placeholder="Leaving date..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="rdate">RETURN DATE</label>
      </div>
      <div class="col-75">
        <input type="text" id="rdate" name="returndate" placeholder="Return date..">
      </div>
    </div>

    
    <div class="row">
      <div class="col-25">
        <label for="address">ADDRESS</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="Address.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
