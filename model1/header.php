<?php
  // First we start a session which allow for us to store information as SESSION variables.
session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main1.css">
</head>
<body>

  <!-- Here is the header where I decided to include the login form for this tutorial. -->
  <header>
    <nav class="nav-header-main">
      <a class="header-logo" href="about_me.php">
        <img src="img/STO2.png" alt="STO logo">
      </a>
      <ul>
        <li><a href="about_me.php">About me</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="javascript.php">JavaScript</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="header-login">
        <!--
        Here is the HTML login form.
        Notice that the "method" is set to "post" because the data we send is sensitive data.
        The "inputs" I decided to have in the form include username/e-mail and password. The user will be able to choose whether to login using e-mail or username.

        Also notice that using PHP, we can choose whether or not to show the login/signup form, or to show the logout form, if we are logged in or not. We do this based on SESSION variables which I explain in more detail in the login.inc.php file!
      -->
      <?php
      if (!isset($_SESSION['id'])) {
        echo '<form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="E-mail/Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php" class="header-signup">Sign Up</a>';
      }
      else if (isset($_SESSION['id'])) {
        echo '<form action="includes/logout.inc.php" method="post">
        <button type="submit" name="login-submit">Logout</button>
        </form>';
      }
      ?>
    </div>
  </header>
