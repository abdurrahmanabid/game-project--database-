<?php
	include("../../data.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Highway Race</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli:400,700,900&amp;display=swap'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header>0</header>
<div class="difficulty-select">
	<h1>Select Difficulty</h1>
	<button type="button" data-difficulty="0" disabled>Easy</button>
	<button type="button" data-difficulty="1" disabled>Medium</button>
	<button type="button" data-difficulty="2" disabled>Hard</button>
	<button type="button" data-difficulty="3" disabled>Brutal</button>
</div>
<div class="tutorial">
	<p><strong>Steer:</strong></p>
	<p><kbd>A</kbd> <kbd>D</kbd><br>or<br><kbd>&#8592;</kbd> <kbd>&#8594;</kbd><br>or<br>Drag left/right</p>
</div>
<form action="" method="post">
	<input type="text" name="result" id="result">
	<button type="submit" class="replay result-button" name="result-button"  ></button>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/106/three.min.js'></script>
<script src='https://codepen.io/jkantner/pen/RXNvXV.js'></script><script  src="./script.js"></script>

</body>
</html>
