
<?php
$username = $_GET["username"];
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    
    $feedback = $_POST["feedback"];

    // Create connection
    $conn = mysqli_connect("localhost","root","","dbms_project");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the feedback table
    $sql = "INSERT INTO feedback (username, feedback) VALUES ('$username', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/8437/8437070.png" type="image/png">
    <title>Feedback Page</title>
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
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2); /* Subtle white box shadow */
        }

        h2 {
            font-size: 24px;
            color: #00bcd4; /* Teal color for the title */
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        h4 {
            color: #00bcd4; /* Teal color for the username */
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 16px;
        }

        textarea {
            width: calc(100% - 22px); /* Adjusted width to fit the border */
            padding: 10px;
            margin-top: 8px;
            box-sizing: border-box;
            background-color: transparent;
            border: 1px solid #fff;
            color: #fff;
            border-radius: 5px;
            resize: vertical; /* Allow vertical resizing of the textarea */
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
        <h2>Feedback Page</h2>

        <form method="post" action="">
            <h4><?php echo $username ?> write something to feedback</h4>

            <label for="feedback">Feedback:</label>
            <textarea name="feedback" rows="4" required></textarea><br>

            <input type="submit" value="Submit Feedback">
        </form>
    </div>

</body>
</html>

