<?php 
// include 'contactus.html';

$server = 'localhost';
$username = 'root';
$password=  '';
$dbname = 'contact';

$conn = mysqli_connect($server,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$sql = "INSERT INTO `formm` (`message`,`name`,`email`,`subject`) VALUES('$message','$name','$email','$subject')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>