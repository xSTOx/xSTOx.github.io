<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
require "header.php";
?>
  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="calculator/calculator.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="calculator/calculator.js"></script>
</head>
<main>
	<div class="container" >
		<form>
			Value 1: <input type="text" id="value1">
			Value 2: <input type="text" id="value2">
			Operator:
			<select id="operator">
				<option value="add">Add</option>
				<option value="min">Minus</option>
				<option value="div">Divide</option>
				<option value="mul">Multiply</option>
			</select>
			<button type="button" onclick="calc()">Calculate</button>
		</form>
		<div id="result"></div>
	</div>
	<button class="btn btn2"><a href="javascript.php">Previous Page</button>
</main>
</html>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
require "footer.php";
?>
