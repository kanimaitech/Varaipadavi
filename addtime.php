<?php
$servername = "localhost";
$username = "id2118232_malyn";
$password = "malynlbj";
$dbname = "id2118232_userreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user = $_COOKIE['username'];
$time = $_POST['score'];
if ($user == "") {
     echo "New record not created successfully";
} else {
     $sql = "INSERT INTO Rank (user, time)
VALUES ('$user', '$time')";
     $sort = "SELECT * FROM Rank ORDER BY time ASC";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>