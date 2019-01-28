<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
require "header.php";
?>

<main>
  <div class="container">
    <button class="btn btn1"><a href="memory_game.php"> Memory game </button>
    <button class="btn btn2"><a href="calculator.php">Calculator</button>
    <button class="btn btn3"><a href="#">aaaaaaaaaaa</button>
    <button class="btn btn4"><a href="#">dddddddddddd</button>
  </div>
</main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
require "footer.php";
?>
