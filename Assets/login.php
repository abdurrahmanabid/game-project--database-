<?php
require_once(dirname(__FILE__) . "/Connect.php");
$conn = mysqli_connect($servername, $uname, $mysql_password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["username"];
    $password = $_POST["password"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if username exists in the database
    $checkUserQuery = "SELECT * FROM users WHERE username='$userName'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password'])) {
            header('Location: ../Game-list/index.php?user='.urldecode($userName));
            // Additional logic for a successful login (e.g., redirect to a dashboard)
        } else {
            echo "Incorrect password. Please try again.";
            
        header('Location: ../index.php?counter=2');
        }
    } else {
        echo "<script>alert('Username not found. Please check your username.')</script>";

        
        header('Location: ../index.php?counter=1');
    }

    $conn->close();
}
?>