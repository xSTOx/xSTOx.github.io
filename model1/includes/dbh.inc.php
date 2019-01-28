<?php
$dBServername = "xSTOx.github.io";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
