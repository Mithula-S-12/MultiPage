<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jain";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //connection string

//$user = $_POST["username"];
//$pass = $_POST["password"];
//$email =$_POST['email'];
//$phone = $_POST['phone'];


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="SELECT * FROM register";
$result = $conn->query($sql);
?>

<html>
      <body>
        <table border="1">
          <tr>
              <th>USERNAME</th>
              <th>EMAIL</th>
              <th>MOBILE_NUMBER</th>
              <th>PASS</th>
          </tr>
<?php
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
?>
   
        <tr>
              <td>
                <?php echo $row["USERNAME"];
                ?>
              </td>
              <td>
                <?php echo $row["EMAIL"];
                ?>
              </td>
              <td>
                <?php echo $row["PHONENUMBER"];
                ?>
              </td>
              <td>
                <?php echo $row["PASSWORD"];
                ?>
              </td>
        </tr>
  
 <?php               
    } //while closing
 ?>

        </table>
    </body>
  </html>
  
<?php
}//if condition closing
 else 
 {
      echo "0 results";
  }
$conn->close();
?>