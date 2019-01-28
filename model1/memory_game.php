<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
require "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="memory_game/memory_game.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="memory_game/memory_game.js"></script>
</head>
<main>

<div id="memory_board">

</div>
<button class="btn btn1"><a href="javascript.php"> Previous page </button>
</main>

<script>newBoard();</script>

</html>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
require "footer.php";
?>