<?php
$userName = $_GET['name'];

$conn = mysqli_connect("localhost", "root", "", "dbms_project");

if (mysqli_connect_errno()) {
    printf("", mysqli_connect_error());
} else {
    $sql2 = "DROP TABLE ".$userName;
    $sql = "DELETE FROM users WHERE username = '$userName'";
    
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    echo "<script> 
    alert('Detetion successfully');
    </script>";
    if ($result) {
        header('Location: control.php');
    } else {
        printf("Error: %s\n", mysqli_error($conn));
    }
}

mysqli_close($conn);
?>
