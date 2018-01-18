<?php
$hostname = "localhost";
$database = "recettes";
$username = "root";
$password = "fondly";

$mysqli = new mysqli($hostname, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
/* echo $mysqli->host_info . "<BR>";

/* change character set to utf8 
*/
/*
if (!$mysqli->set_charset("utf8")) {
    echo ("Error loading character set utf8: " . $mysqli->error);
} 
else {
    printf("Current character set: %s\n", $mysqli->character_set_name());
}
 echo "<BR>"; */
?>