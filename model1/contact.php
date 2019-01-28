<?php
require "header.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact form tutorial</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
  </head>
  <body>
    <main>
      <div class="p">
      <p>SEND E-MAIL</p>
    </div>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
      </form>
    </main>
  </body>
</html>

<?php
require "footer.php";
?>