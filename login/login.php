<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jain";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$USER=$_POST['tb1'];
$PASS=$_POST['tb2'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  (USERNAME ,PASSWORD)
VALUES ('$USER' , '$PASS')";

if ($conn->query($sql) === TRUE) 
{
  echo "new record created successfully";
} 
 else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>