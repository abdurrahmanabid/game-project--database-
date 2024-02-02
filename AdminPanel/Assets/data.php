

<?php





$conn = mysqli_connect("localhost", "root", "", "dbms_project");

if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

$tableName = "users"; 

// Count the number of records in the table
$query = "SELECT COUNT(*) AS record_count FROM $tableName";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $recordCount = $row['record_count'];


    mysqli_free_result($result);
} 

// Close the connection



    function printed(){
        $conn = mysqli_connect("localhost", "root", "", "dbms_project");
        $tableName = "users";
    $sql="SELECT * FROM $tableName";
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
        th {
            background-color: #f2f2f2;
            color : #00796b;
        }
        </style>
        
        
        
        <table border='2'>
                <tr>
                    <th>Serial Number</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    
                </tr>";
                $serialNumber =1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>$serialNumber</td>
                            <td>" . $row['name'] . "</td>
                            <td><a href='../Assets/profile.php?name=".$row['username']."'>" . $row['username'] . "  </a></td>
                            <td>" . $row['email'] . "</td>
                          </tr>";
        
                    $serialNumber++;
                }
                echo "</table>";
    }
}




mysqli_close($conn);
?>
