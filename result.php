<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<meta http-equiv="Refresh" content="3, url=index.php">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

	<style>
		* {
			margin: 0;
			padding: 0;
			outline: 0;
			box-sizing: border-box;
			font-family: 'Roboto Mono'
		}
		
		body {
			background-color: orange;
			width: 100%;
			height: 100vh;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.calculator {
			padding: 30px 10px;
			background-color: #fff;
			border-radius: 10px;
			width: 400px;
		}

	</style>
</head>
<body>
	<div class="calculator">
		<?php
		if(isset($_POST['add'])) {
			$add = $_POST['first'] + $_POST['second'];
			echo "Your result is: $add";
		}elseif (isset($_POST['minus'])) {
			$minus = $_POST['first'] - $_POST['second'];
			echo "Your result is: $minus";
		}elseif (isset($_POST['multiply'])) {
			$multiply = $_POST['first'] * $_POST['second'];
			echo "Your result is: $multiply";
		}elseif (isset($_POST['devide'])) {
			$devide = $_POST['first'] / $_POST['second'];
			echo "Your result is: $devide";
		}
		?>
	</div>
</body>
</html>