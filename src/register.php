<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body style="user-select: none;">

  <?php
  // Create a database connection
  $servername = "localhost";
  $username = "root";
  $password = "";   // Enter your password here
  $dbname = "my_db";

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
    echo '<p class="h1 text-center" style="margin-top: 200px; color: #0d6efd"> Registration Successful! </p>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close database connection
  $conn->close();
  ?>


</body>

</html>
