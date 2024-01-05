
<?php
// Create a database connection
$servername = "sql113.byetcluster.com";   // localhost
$username = "if0_34660512";   // root
$password = "K3ldF65S3C0i";   // Enter your password here
$dbname = "if0_34660512_02_php_reg_form";    // my_db

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
