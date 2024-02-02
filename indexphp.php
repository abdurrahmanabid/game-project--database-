<?php
require_once(dirname(__FILE__) ."/Assets/Connect.php");


if (isset($_GET["counter"])) {
  $counter = $_GET["counter"];
  if ($counter == "1") {
    
    echo "<script>alert('Username not found. Please check your username.')</script>";
    
  }elseif ($counter == "2") {
    
    echo "<script>alert('Incorrect Password.')</script>";
  }
}



$conn = mysqli_connect($servername, $uname, $mysql_password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $uName = $_POST["uName"];
    $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    $password_confirmation = $_POST["rePass"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if username already exists
    $checkUsernameQuery = "SELECT * FROM users WHERE username='$uName'";
    $result = $conn->query($checkUsernameQuery);

    if ($result->num_rows > 0) {
      echo "<script>alert('Username already exists in the database. Please choose a different username.')</script>";
    } else {
        // Insert the new user if the username does not exist
        $sql = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$uName', '$email', '$password')";
        $sql2 = "CREATE TABLE ".$uName."(
          sl int(11) AUTO_INCREMENT PRIMARY KEY,
              gnname varchar(256),
              played_date DATE DEFAULT CURRENT_DATE,
              played_time TIME DEFAULT CURRENT_TIME
          );";
        $conn->query($sql2);

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

