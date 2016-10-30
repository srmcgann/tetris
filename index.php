<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
		<meta name="description" content="Free HTML5 tetris game">
		<meta name="keywords" content="tetris,HTML5,canvas,JavaScript">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<? include_once("../analysis.php") ?>
		<div class="header">
			TETRIS
		</div>
		<div class="main">
			<canvas class="board" id="board"></canvas>
		</div>
		<div class="status" id="status">
		</div>
		<script src="game.js"></script>
	</body> 
</html>
