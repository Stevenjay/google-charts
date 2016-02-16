<?php 
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/style" href="css/style.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
	<title>Where Are You In The World</title>
</head>
<body>
	<div id="main">
		<h1>Where do you live in the world?</h1>

		<form action="" method="post">
			<label>Enter Your Country:</label>
  			<input type="text" name="country">
			<input type="submit">
		</form>

			<!--Div that will hold the pie chart-->
    	<div id="chart_div"></div>	

	</div>



</body>
</html>