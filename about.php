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
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color:#FFFAFA;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #CD5C5C;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #DAA520;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<div style="background: #FFFAFA;">


<div class="about-section">
<br>
<br><br><br>
  <h1><b>ABOUT</b></h1>

  <p><b><i>The purpose is to build a Web Portal and give access to the Students and Administration to Make it a Online Service for Student's Benifit. We are a team of three members worked together to build a Web Portal for College Hostel Management.So On that basis,This web Portal Consist of login page,once the user(student) gets logged in tey will find a dashboard where various activity regarding the hostel will be seen. </i></b></p>
  <p><b><i>The main reason for arrival of this Web page is to upgrade the formal system into digital plateform. In hostel usually the attendence,leave request,information passing,payment of fee,booking of rooms are done in offline mode. Resize the browser window to see that this page is responsive by the way.</i></b></p>
  <p><b><i>If the student want to pay their hostel fee then they can pay it in this web portal. if the student want to take leave and visit home then they can request for leave throug this web page by filling out their leaving form and submitting it. This TCE HOSTEL SERVICE also provides notification service where the important hostel meeting and responses regarding leave request will be posted.</i> </b></p>
  <p><b><i>Along wit that this web page updates the day today mess food details for students knowledge.Students can book their rooms here in this portal.</i></b></p>
</div>

<br><br><br>
<h2 style="text-align:center"><b>HOW CAN I CONTACT YOU?</b></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="data:image/png;base64,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" alt="Jane" style="width:100%">
      <div class="container">
        <h2><b>GMAIL</b></h2>
        <p class="title">PERSONAL ACCOUNT</p>
        
        <p>dhanujav3@gmail.com</p>
        <a href ="https://mail.google.com/mail/u/2/?ogbl#inbox"><p><button class="button">Contact</button></p></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="data:image/png;base64,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" alt="Mike" style="width:100%">
      <div class="container">
        <h2><b>LINKEDIN</b></h2>
        <p class="title">PERSONAL ACCOUNT</p>
        
        <p>DHANUJA V</p>
        <a href="https://www.linkedin.com/in/dhanuja-v-210279190/"><p><button class="button">Contact</button></p></a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="https://avatars.githubusercontent.com/u/16915719?v=4" alt="John" style="width:100%">
      <div class="container">
        <h2><b>GITHUB</b></h2>
        <p class="title">PERSONAL ACCOUNT</p>
        
        <p>dhanuja167</p>
        <a href = "https://github.com/dhanuja167"><p><button class="button" >Contact</button></p></a>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>