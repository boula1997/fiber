


<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Orange";



$price = $_POST["price"];
$limit_price = $_POST["limit_price"];
$types = $_POST["types"];
$description = $_POST["description"];

if ($types == 'mobile')
  $name = '1.jpg';
else if ($types == 'accessory')
  $name = '22.jpg';
else if ($types == 'router')
  $name = '03.jpg';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO items (name, Price, Price_disc,types,description)
VALUES ('$name', '$price', '$limit_price','$types','$description')";

if ($conn->query($sql) === TRUE) {
  header("location:http://localhost/Orange full projecr/Home.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>