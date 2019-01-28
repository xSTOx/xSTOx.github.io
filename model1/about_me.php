<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
require "header.php";
?>

<main>
  <div class="text">
   <div class="texth">
     <h1>Hello</h1>
     <h2>My name is Stoica Alexandru-Marius</h2>
   </div>
   <p>This site is to improve my skills in HTML, CSS, JavaScript, PHP and MySQL.
     Here i will implement everything i have learned and everything i learn.
     You need to create an account to navigate the site.
   In the end, please come back with feedback.</p>
   <p>Thank you and enjoy the site.</p>
 </div>
 <div class="wrapper-main">
  <section class="section-default">
    <?php
    if (!isset($_SESSION['id'])) {
      echo '<p class="login-status">You are logged out!</p>';
      ?>
      <img src="http://localhost/STO-exemple.com/Login_System/img/line1.png" align="right">
      <?php

      
      
    }
    else if (isset($_SESSION['id'])) {
      echo '<p class="login-status">You are logged in and you can use this site now!</p>';
    }
    ?>
  </section>
</div>
</main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
require "footer.php";
?>
