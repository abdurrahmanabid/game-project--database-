<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2535/2535531.png" type="image/png">
    <title>Forget Password</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px  #00796b; /* Subtle white box shadow */
        }

        h2 {
            font-size: 24px;
            color: #00bcd4; /* Teal color for the title */
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 16px;
        }

        input {
            width: calc(100% - 22px); /* Adjusted width to fit the border */
            padding: 10px;
            margin-top: 8px;
            box-sizing: border-box;
            background-color: transparent;
            border: 1px solid #fff;
            color: #fff;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #00bcd4; /* Teal button color */
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s; /* Smooth transition for button color */
        }

        input[type="submit"]:hover {
            background-color: #00796b; /* Darker teal on hover */
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Forget Password</h2>

        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
            <br>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <br>
            <input type="submit" name="submit" value="Reset Password">
        </form>
    </div>

</body>
</html>


<?php
$conn = mysqli_connect("localhost","root","","dbms_project");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){


// Retrieve values from the form
$username = $_POST['username'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Check if the username exists in the database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Update the password if the username is valid
    if ($new_password == $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_sql = "UPDATE users SET password = '$hashed_password' WHERE username = '$username'";
        $conn->query($update_sql);
        echo "Password updated successfully!";
    } else {
        echo "Passwords do not match!";
    }
} else {
    echo "Invalid username address!";
}
}
// Close the database connection
$conn->close();
?>
