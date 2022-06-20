<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.header {
  padding: 30px;
  text-align: center;
  background: #673AB7;
  color: white;
  font-size: 30px;
}
</style>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="assets/quiz.css">
    <script type="text/javascript" src="javascript/quiz.js"></script>
</head>
<div class="header">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <h1 style="font-family: 'Pacifico', cursive">Welcome to Covid Tester</h1>
  <p>Home</p>
</div>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="login.php">Login</a>
  <a href="registration.php">Register</a>
  <a href="logout.php">Logout</a>
  <a href="live_data.php">Live Update</a>
</div>

    <div class="form">
      <style>
        body{
          background: #ddd;
        }
      </style>
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <!-- <p>Hey, <?php echo $_SESSION['age']; ?>!</p> -->
        <p>You are in user dashboard page.</p>
        <form name="quiz" id="quiz">
    <div>
        <p>1.Fever?</p>
        <p><input type="radio" name="question1" value="A">A.<104F</p>
        <p><input type="radio" name="question1" value="B">B.>96.8F</p>
    </div>

    <div>
        <p>2.Runny Nose?</p>
        <p><input type="radio" name="question2" value="A">A.Yes</p>
        <p><input type="radio" name="question2" value="B">B.No</p>
    </div>

    <div>
        <p>3.Runny Nose?</p>
        <p><input type="radio" name="question3" value="A">A.Yes</p>
        <p><input type="radio" name="question3" value="B">B.No</p>
    </div>

    <div>
        <p>4.Sore Throat?</p>
        <p><input type="radio" name="question4" value="A">A.Yes</p>
        <p><input type="radio" name="question4" value="B">B.No</p>
    </div>

    <div>
        <p>5.Loose Motion?</p>
        <p><input type="radio" name="question5" value="A">A.Yes</p>
        <p><input type="radio" name="question5" value="B">B.No</p>
    </div>

    <div>
        <p>6.Vometing?</p>
        <p><input type="radio" name="question6" value="A">A.Yes</p>
        <p><input type="radio" name="question6" value="B">B.No</p>
    </div>

    <div>
        <p>7.Breathing Issue?</p>
        <p><input type="radio" name="question7" value="A">A.Yes</p>
        <p><input type="radio" name="question7" value="B">B.No</p>
    </div>

    <div>
        <p>8.Chest Pain?</p>
        <p><input type="radio" name="question8" value="A">A.Yes</p>
        <p><input type="radio" name="question8" value="B">B.No</p>
    </div>

    <div>
        <p>9.Loss of Taste and Smell?</p>
        <p><input type="radio" name="question9" value="A">A.Yes</p>
        <p><input type="radio" name="question9" value="B">B.No</p>
    </div>

    <div>
        <p>10.Body Aches?</p>
        <p><input type="radio" name="question10" value="A">A.Yes</p>
        <p><input type="radio" name="question10" value="B">B.No</p>
    </div>


    <input type="button" name="" value="I'm Done!" id="button" onclick="check()">
</form>

<p id="result"></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
