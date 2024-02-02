
            <?php 
            include("PHP/profile.php");
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile </title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6915/6915987.png" type="image/png">
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <div class="wrapper loginSection">
        <div class="title">Profile Details</div>
        <div class="content">
            <div class="image">
                <img src="image/user(1).png" height="100" width="100" alt="Hello">
            </div>
            
            <form action="" method="post">
            <h3>Name: </h3><!-- Update the IDs -->
<input type="text" name="name" id="1" placeholder="<?php echo $ParsonName?>" class="editable" disabled><hr>

<h3>User Name:</h3> <input type="text" name="username" id="userName" placeholder="<?php echo $ParsonUserName?>" class="editable" disabled><hr>

<h3>Email:</h3> <input type="text" name="email" id="email" placeholder='<?php echo $ParsonEmail?>' class="editable" disabled><hr>

        <div>
            <?php 
            $name = $_GET['name'];
            include("PHP/profile-more-details.php");
            ?>
        </div>

            <h3 class='bottom'></h3>
            <input type="submit" name="submit" class="btn edit" id="submit" value="Submit" >
        </form>

            <div class="btnbox">
                <form action="" method="post" class="form">
                <input class="btn more-details" name="more-details" type="submit" value="More Details" /></form>
                <input class="btn edit" type="button" value="Edit Your Profile" onclick="edit()" />
            </div>
            
        </div>

        <script src="js/edit.js"></script>
    </div>
</body>
</html>
