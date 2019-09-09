<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbtest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE teachers (
tid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
sub VARCHAR(10),
courseid int,
user_pass varchar(10)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table teachers created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
// sql to create table
$sql = "CREATE TABLE students(
sid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(20),
reg_date TIMESTAMP,
courseid int,
user_pass varchar(10)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table students created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>