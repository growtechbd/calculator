<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
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

		.calculator label {
			display: block;
			margin-bottom: 10px;
			font-size: 18px;
		}

		.calculator input {
			display: block;
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border-color: #000;
			width: 100%;
		}

		.form-group {
			margin-bottom: 20px;
		}

	</style>
</head>
<body>
	<div class="calculator">
		<form action="result.php" method="post">
			<div class="form-group">
				<label for="first">Number One</label>
				<input type="number" name="first" class="form-control" placeholder="Enter your first number.." required>
			</div>
			<div class="form-group">
				<label for="second">Number Two</label>
				<input type="number" name="second" class="form-control" placeholder="Enter your second number.." required>
			</div>
			<input type="submit" name="add" value="+" style="margin-bottom: 5px;">
			<input type="submit" name="minus" value="-" style="margin-bottom: 5px;">
			<input type="submit" name="multiply" value="*" style="margin-bottom: 5px;">
			<input type="submit" name="devide" value="/" style="margin-bottom: 5px;">
		</form>
	</div>
</body>
</html>