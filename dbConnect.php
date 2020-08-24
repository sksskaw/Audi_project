<?php
$servername = "localhost";
$username = "root";
$password = "378044";
$dbname ="kthdb";

//Creat connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("접속에 실패했습니다. " . $conn->connect_error);
}