<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5082/5082597.png" type="image/png">
    <title>Document</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .controlSec {
            max-width: 400px; /* Reduced width for a smaller div */
            margin: 50px auto;
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px #00BCD4; /* Subtle white box shadow */
        }

        .search {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #00bcd4; /* Teal color for labels */
        }

        select, input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #00bcd4; /* Teal border for input elements */
            border-radius: 5px;
            background-color: #1c1c1c;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #00bcd4; /* Teal button color */
            color: #fff;
            cursor: pointer;
            transition: background-color 1s; /* Smooth transition for button color */
        }
        input[type="submit"]:hover {
            background-color: #00796b; /* Darker teal on hover */
        }
    </style>
</head>
<body>
    
    <section class="controlSec">
        <div class="search">
            <form action="" method="post" id="myForm">
                <label for="alltribute">Select type</label>
                <select name="attribute" id="attribute">
                    <option value="name">name</option>
                    <option value="username">username</option>
                    <option value="email">email</option>
                </select><br>
                <label for="condition">Key:</label>
                <input type="text" name="key" id="key" ><br>
                <input type="submit" name="search" value="Search">
            </form>
        </div>
    </section>
</body>
</html>


<?php





if (isset($_POST["search"])) {
    function search(){
        
        $conn = mysqli_connect("localhost", "root", "", "dbms_project");
        
        $attribute = $_POST['attribute'];
        $key = $_POST['key'];

        $sql = "SELECT * FROM `users` WHERE " . $attribute . " Like '%".$key ."%'";


        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "
            <style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th{
                color: #000;
                background-color: #3C4043;
            }
            </style>
            
            
            
            <table border='1'>
                    <tr>
                        <th>Serial Number</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Remove</th>
                        
                    </tr>";
                    $serialNumber =1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>$serialNumber</td>
                                <td>" . $row['name'] . "</td>
                                <td><a href='../Assets/profile.php?name=".$row['username']."'>" . $row['username'] . "</a></td>
                                <td>" . $row['email'] . "</td>

                              <td><a href='delete.php?name=".$row['username']."'>" ."Delete". "</a></td>

                              </tr>
                              ";
            
                        $serialNumber++;
                    }
                    echo "</table>";
                    mysqli_close($conn);
                
        
    }
}
search();
}


?>