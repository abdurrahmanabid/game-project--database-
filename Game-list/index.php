<?php

require_once(dirname(__FILE__) ."../index.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/6/66/Home_icon_blue-1.png" type="image/png">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary border" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand"  href="../Assets/profile.php?name=<?php echo $_GET['user']; ?>" data-bs-theme="blue">Hello <?php echo $_GET['user']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarNavDropdown">
          <ul class="navbar-nav float-right">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item float-right">
              <a class="nav-link"  href="../Assets/profile.php?name=<?php echo $_GET['user']; ?>">Profile</a>
            </li>
            <li class="nav-item float-right">
              <a class="nav-link" href="../Assets/feedback.php?username=<?php echo $_GET['user']; ?>">Feedback</a>
            </li>
            <li class="nav-item float-right">
              <a class="nav-link" href="../">Log-out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



  <!-- Container for Cards -->
  <div class="container mt-4">

    <!-- Row 1 -->
    <div class="row">

      <!-- Card 1 -->
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://image.winudf.com/v2/image1/Y29tLmlzYW5kcm9pZC5od3JhY2VyX3NjcmVlbl83XzE1NjY5OTUxNTZfMDc3/screen-7.webp?fakeurl=1&type=.webp"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/highway-race/dist?name=<?php echo $_GET['user']; ?>&gName=Highway Race " class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>



      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://img.gamedistribution.com/77087b953d9047198a48528927dab68a-1280x550.jpeg"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Brick Breakes/dist?name=<?php echo $_GET['user']; ?>&gName=Brick Breaker" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>


      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://mir-s3-cdn-cf.behance.net/projects/404/c4b80d143006427.Y3JvcCw4NjksNjgwLDI1LDA.png"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/JS-Flappy-Bird/?name=<?php echo $_GET['user']; ?>&gName=Flappy Bird" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>


      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://store-images.s-microsoft.com/image/apps.54588.14090654178473619.aa2706f7-9244-4d37-b59f-3f87f7589476.6a5a6db1-70ba-4b57-a879-7f9264cd3a40?mode=scale&q=90&h=1080&w=1920
"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Memory Card Games/Memory Card Games ?name=<?php echo $_GET['user']; ?>&gName=Memory Cards Game" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>

      <!-- Repeat the above card structure for Card 2 to Card 12 -->

    </div>







    <!-- Row 2-->


    <!-- Row 1 -->
    <div class="row">

      <!-- Card 1 -->
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src=" https://www.scaler.com/topics/images/number-guessing-game-python-thumbnail.webp"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Number Guess ?name=<?php echo $_GET['user']; ?>&gName=Number Guesser" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>



      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://img.freepik.com/free-vector/purple-background-with-quiz-word-colorful-people_52683-126.jpg?w=740&t=st=1700804375~exp=1700804975~hmac=10f39057ab6d3a1a70b63884ed34e0ee83d022b619cfd80e7b141199fdc603b0"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Quiz Application with Timer ?name=<?php echo $_GET['user']; ?>&gName=Quiz Game" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>


      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://www.ponderweasel.com/wp-content/uploads/2014/11/who-invented-rock-paper-scissors.png"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Rock Paper Scissors ?name=<?php echo $_GET['user']; ?>&gName=Rock Paper Scessors" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>


      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://www.marketjs.com/game/thumbnail/cached/ahVzfm1hcmtldGpzLWVudGVycHJpc2VyEQsSBEdhbWUYgICg4OOCigoM"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Snake/?name=<?php echo $_GET['user']; ?>&gName=Snake Game" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>

      <!-- Repeat the above card structure for Card 2 to Card 12 -->

    </div>






    <!-- Row 3 -->
    <div class="row">

      <!-- Card 1 -->
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://i0.wp.com/www.codepel.com/wp-content/uploads/2023/07/Bouncing-Ball-Game-Code-in-HTML.png?fit=1280%2C960&ssl=1"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Bounching ball/dist?name=<?php echo $_GET['user']; ?>&gName=Protect The Ball" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>



      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://m.media-amazon.com/images/I/61M3rDwh4qL.png"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/tetris/dist?name=<?php echo $_GET['user']; ?>&gName=Tetris" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>


      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://i.ytimg.com/vi/rZcBHcmStJM/maxresdefault.jpg"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Typing Speed Test Game in JavaScript/?name=<?php echo $_GET['user']; ?>&gName=Typing Speed" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>


      
      <div class="col-md-3 mb-4 " data-bs-theme="dark">
        <div class="card">
          <img src="https://play-lh.googleusercontent.com/Hc---KmE7Tu3mvIaV5rd-YBft_BVNX8ckRCB3LAKXOVjtjxofTJ4KjTImGY45B9RfJ8M"
            class="card-img-top" alt="Card Image"  style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <a href="../Games/Word Guessing Game?name=<?php echo $_GET['user']; ?>&gName=Guess the word" class="btn btn-primary btn-block col-12">Play</a>
          </div>
        </div>
      </div>


    </div>


  </div>
    
    <!-- End Example Code -->


    
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>