<?php
$username = "x77x84xhahimosz4";
$password = "zae2msvvkqfuku8x ";
$hostname = "o61qijqeuqnj9chh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>
