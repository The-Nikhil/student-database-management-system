<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbtest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO teachers(tid,firstname, lastname, sub,courseid,user_pass)
VALUES ()";
$sql="INSERT INTO students(sid,firstname, lastname, email,courseid,user_pass)
VALUES ()";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>