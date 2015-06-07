<?php


$servername = "localhost";
$username = "root";
$password = "kumar1234";
$dbname = "kumar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$uname=$_POST['your_name'];
$ueaddr=$_POST['your_email'];
$umsg=$_POST['your_message'];

echo $uname; 
$sql = "INSERT INTO user_detail VALUES ('".$uname."','".$ueaddr."','".$umsg."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>