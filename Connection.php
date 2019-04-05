<?php

//log in settings to db
$servername = "localhost";
$username = "Stu391";
$password = "Stu7151!";
$dbname = "stu391";

// log in to db server using the specified variables which contin the details for the daatabse.
$conn = new mysqli($servername, $username, $password, $dbname);

// sets up connection to server
if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
}

?>