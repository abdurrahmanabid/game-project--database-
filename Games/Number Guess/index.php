
<?php
include("../data.php");

?>
<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game in HTML CSS & JavaScript</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <header>Guess a number from 1 to 100</header>
      <p class="guess"></p>
      <div class="input-field">
        <input type="number" />
        <button>Check</button>
      </div>
      <p>You have <span class="chances">10</span> chances</p>
    </div>

    <script src="script.js" defer></script>
  </body>
</html>
