<?php
$servername = "localhost";
$username = "root";
$password = "ameex";
$dbname = "student";
$name="parthiban";
$email="p@gamil.com";
$phone="098765432113242";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO stu_details (name, email, mobile_number)
VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>