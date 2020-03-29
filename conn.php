<?php
$servername = "webdev.scs.ryerson.ca";
$username = "malsalem";
$password = "notKiWaj ";
// Create connection
$conn = mysqli_connect("localhost", "malsalem", "notKiWaj", "malsalem");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
echo "well done";
}

 
?>
