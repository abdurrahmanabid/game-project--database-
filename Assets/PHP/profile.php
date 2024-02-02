<?php 




$conn = mysqli_connect("localhost", "root", "", "dbms_project");

$name = $_GET['name'];

$count = 1;
if (mysqli_connect_errno()) {
    die("" . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM `users` WHERE `username` LIKE '%" . $name . "%'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $ParsonName= $row["name"];
        $ParsonUserName= $row["username"];
        $ParsonEmail= $row["email"];
    }
}


    
            if(isset($_POST['submit'])){
                $userName = $ParsonUserName;
                $name = $_POST['name'];
                $email = $_POST['email'];
            
                // Construct the SQL UPDATE query
                $sql = "UPDATE users SET name='$name', email='$email' WHERE username='$userName'";
            
                // Execute the query
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                    
                    header('Location: profile.php?name='.$userName);
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            mysqli_close($conn);
                        ?>