<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jain";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$STUDENT_NAME=$_POST['tb1'];
$EMAIL=$_POST['tb2'];
$BRANCH=$_POST['tb3'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO university (STUDENT_NAME, EMAIL, BRANCH)
VALUES ('$STUDENT_NAME' , '$EMAIL' , '$BRANCH')";

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