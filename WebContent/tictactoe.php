<?php
echo '
		<html>

	<head>
		<meta charset="utf-8" />
    	<title>Tic-Tac-Toe</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>

		<script type="text/javascript" src="main.js"></script>
		
	</head>

	<body onLoad="startGame();">
	
		<div id="xR" class="xRectangle">X</div>
		<div id="yR" class="yRectangle">O</div>
		
		<table class="table">
	 		<tr>
	 			<td id="s1" class="Square" onClick="nextMove(this);"></td>
	 			<td id="s2" class="Square" onClick="nextMove(this);"></td>
	 			<td id="s3" class="Square" onClick="nextMove(this);"></td>
	 		</tr>	
			<tr>
	 			<td id="s4" class="Square" onClick="nextMove(this);"></td>
	 			<td id="s5" class="Square" onClick="nextMove(this);"></td>
	 			<td id="s6" class="Square" onClick="nextMove(this);"></td>
	 		</tr>	
	 		<tr>
	 			<td id="s7" class="Square" onClick="nextMove(this);"></td>
	 			<td id="s8" class="Square" onClick="nextMove(this);"></td>
	 			<td id="s9" class="Square" onClick="nextMove(this);"></td>
	 		</tr>	
		</table>
		
		<div id="message" class="message">Game Result</div>
		
		<div class="btn">
		<button id="ressetGame" class="ressetGame" onClick="btnResset();">RESET GAME</button>
		</div>
		
		
		<a class="stats" href="scoredata.php" > SCORES</a>
		
	</body>

</html>
		
';
?>
