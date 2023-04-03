
<?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "Manager12345@";   // Enter your password here
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert form data into database
$sql = "INSERT INTO `users` (firstname, lastname, mobileno, email, password)
VALUES ('$firstname', '$lastname', '$mobileno', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<br><br><br><br><br><br><br><br><br><br><br>";
  echo "<center><h1> Registration Successful! </h1></center>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
