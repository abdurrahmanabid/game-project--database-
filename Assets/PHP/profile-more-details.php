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


            
            if(isset($_POST["more-details"])){
                
                $conn = mysqli_connect("localhost", "root", "", "dbms_project");
                $sql = "SELECT * FROM ".$ParsonUserName;
                $result = mysqli_query($conn, $sql);
            
            
                if($result){
                    echo "<h4 style='color: #00BAD2;' >Played Details:</h4> ";
                    echo '<table border="1" style="width: 100%; border-collapse: collapse;">';
                    echo '<tr>';
                    echo '<th style="padding: 10px; text-align: left;">Serial Number</th>';
                    echo '<th style="padding: 10px; text-align: left;">Game Name</th>';
                    echo '<th style="padding: 10px; text-align: left;">Date</th>';
                    echo '<th style="padding: 10px; text-align: left;">Time</th>';
                    echo '</tr>';
                    
                    $serialNumber = 1; // Initialize serial number
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td style="padding: 10px; text-align: left;">' . $serialNumber . '</td>';
                        echo '<td style="padding: 10px; text-align: left;">' . $row["gnname"] . '</td>';
                        echo '<td style="padding: 10px; text-align: left;">' . $row["played_date"] . '</td>';
                        echo '<td style="padding: 10px; text-align: left;">' . $row["played_time"] . '</td>';
                        echo '</tr>';
                        
                        $serialNumber++; // Increment serial number for the next row
                    }
                    
                    echo '</table>';
                    
                    
            }
            }

?>