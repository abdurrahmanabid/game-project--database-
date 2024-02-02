<?php

 
 function view(){
    $conn =mysqli_connect("localhost","root","","dbms_project");

 if (mysqli_connect_errno()){
    echo "". mysqli_connect_error();
 }else{
    $sql = "SELECT * FROM feedback WHERE 1";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<style>
            body {
                background-color: #121212;
                color: #fff;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                text-align: center;
            }
    
            .container {
                max-width: 800px;
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
            .color{
                font-color : red;
                

            }
    
            .feedback {
                border: 1px solid #00bcd4; /* Teal border for each feedback item */
                border-radius: 5px;
                padding: 15px;
                margin-bottom: 20px;
                text-align: left;
            }
    
            .feedback img {
                border-radius: 50%;
                margin-right: 10px;
            }
    
            .feedback h4 {
                color: #00bcd4; /* Teal color for the username */
            }
    
            .feedback p {
                margin-top: 10px;
            }
            .color{
                font-size: 10px;
            }
        </style>';

            echo'<div class= "emni">
            <div class="feedback">
            <img src="user(1).png" height="50" width="50" alt="User Profile Pic">
            <h4><a href="../Assets/profile.php?name='.$row["username"].'" >'.$row["username"].'</a></h4>
            <p>'.$row["feedback"].'</p>
            <p class = "color"> Date and time: '.$row["submit_time"].'</p>
        </div></div>';
        }
    }
 }

}
?>