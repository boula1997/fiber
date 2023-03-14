


<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Orange";

$User_Name=$_POST["User_Name"];
$Email=$_POST["Email"];
$Cell_Phone=$_POST["Cell_Phone"];
$Comment=$_POST["Comment"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Contactus (User_Name, Email, Cell_Phone,Comment)
VALUES ('$User_Name', '$Email', '$Cell_Phone','$Comment')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>