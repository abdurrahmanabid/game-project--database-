


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/5410/5410543.png" type="image/png">
    <title>Admin Feedback Page</title>
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
            max-width: 800px;
            margin: 50px auto;
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            margin-top: 0; /* Subtle white box shadow */
        }

    </style>
</head>
<body>

    <div class="container">
        <h2>Admin Feedback Page</h2>
        
        <div class="feedback">
            <?php 
            require_once(dirname(__FILE__) ."./feedbackphp.php");
            
view();

        ?>
        </div>

    </div>

</body>
</html>
