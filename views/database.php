<?php

$severname= "localhost";
$username= "root";
$password = "";

$dbname = "safefood";

$conn = mysqli_connect($severname, $username, $password,$dbname);

if (!$conn) {
	echo "Connection failed!";
}