<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
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

    <style>
        body{
            background: white;
        }
    </style>
    <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="100%" height="600px"></iframe>
<?php
    
?>
</body>
</html>
