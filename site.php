<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mob = $_POST["mob"];
$address = $_POST["Address"]; // Corrected variable name
$crname = $_POST["crname"];

$conn = new mysqli('localhost', 'root', '', 'exlogin');

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO loginn (fname, lname, mob, address, crname)
        VALUES ('$fname', '$lname', '$mob', '$address', '$crname')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
