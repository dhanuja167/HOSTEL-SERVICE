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

      <a href="http://localhost:8080/hostel/addashboard.php" class="w3-bar-item w3-button"><b><i>DASHBOARD</i></b></a>
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>HOSTEL STUDENT ADMISSION</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form class="modal-content animate" action="admission_fun.php" method="POST">
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="reg_no" placeholder="reg no" required />
          </div>
<div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="roll_no" placeholder="roll no" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-book"></i></span>
            <input type="text" name="department" placeholder="department" required />
          </div>
<div class="input_field"> <span><i aria-hidden="true" class="fa fa-book"></i></span>
            <input type="text" name="year" placeholder="year" required />
          </div>
          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="name" placeholder="Name" />
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                <input type="text" name="contact" placeholder="contact" required />
              </div>
            </div>
          </div>
            	<div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="text" name="parent" placeholder="parent's name" required />
          </div>
<div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
            <input type="text" name="p_contact" placeholder="contact" required />
          </div>
<div class="input_field"> <span><i aria-hidden="true" class="fa fa-home"></i></span>
            <input type="text" name="address" placeholder="address" required />
          </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb1">
    			<label for="cb1">I agree with terms and conditions</label>
            </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb2">
    			<label for="cb2">I want to receive the notification</label>
            </div>
          <input class="button" type="submit" value="Register" />
        </form>
      </div>
    </div>
  </div>
</div>
<p class="credit">Developed by dhanuja</p>
<!-- partial -->
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
</html>