<?php
$dbhost = '35.185.55.233';
$dbuser = 'root';
$dbpass = 'Nigga123*';
$dbname = 'punishments';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");
?>
