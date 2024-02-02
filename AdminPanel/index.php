<?php
include("Assets/data.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style.css">
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #1c1c1c;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
            color: #00bcd4; /* Teal color for the heading */
        }

        nav {
            background-color: #1c1c1c;
            padding: 10px;
            text-align: center;
        }
        .ref {
            background-color: #0C464D; /* Teal button color */
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.5s; /* Smooth transition for button color */
        }

        button:hover, a:hover {
            background-color: #00796b; /* Darker teal on hover */
        }

        section {
            padding: 20px;
        }

        .dashboardSec, .userSec {
            display: none;
        }

        .dashboard {
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px #00bcd4; /* Teal box shadow */
            text-align: center;
        }

        h2 {
            color: #00bcd4; /* Teal color for headings */
        }

        h1, p {
            color: #fff;
        }
        p{
            font-size: 20px;
            margin-top: 70px;
        }

        a {
            text-decoration: none;
            color: #00bcd4; /* Teal color for links */
        }
    </style>
    <title>Admin Panel</title>
    <link rel="icon" href="https://icons.veryicon.com/png/o/miscellaneous/admin-dashboard-flat-multicolor/admin-roles.png" type="image/png">
</head>
<body>

<header>
    <h1>Admin Panel</h1>
</header>

<nav>
    <a class="dashboardRef ref" onclick="dashboard()">Dashboard</a>
    <a class="userRef ref" onclick="user()">Users</a>
    <a href="feedbacked.php" class="controlRef ref">Feedbacks</a>
    <a class="controlRef ref" href="control.php" onclick="control()">Controls</a>
</nav>

<section class="dashboardSec" id="dashboardSection">
    <div class="dashboard">
        <h2>Welcome to the Admin Panel</h2>
    </div>
    <div class="user" style = "margin-top: 150px" >
        <h1 ><?php echo $recordCount; ?></h1>
        <h1 ><p>users</p></h1>
    </div>
</section>

<section class="userSec" id="user">
    <div>
        <h1>All users are: </h1>
        <div>
            <?php
            printed();
            ?>
        </div>
    </div>
</section>

<script src="Assets/control.js"></script>
</body>
</html>
