<!DOCTYPE html>
<html lang="en">

<head>
<link href="css/data.css" rel="stylesheet" type="text/css" media="screen" />
<script src="js/jquery-1.12.3.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<title> 
	List of Quotes
</title>
</head>

<body><br>

<div align="center">


 <nav>
  <a href="random.php">Random Quotes</a> |
  <a href="insertQuote.php">Insert Quote</a> |
  <a href="quoteList.php">View All Quotes</a> 
</nav> 

<strong><h3>Random Quotes</h3></strong>
</div>

<?php

	require_once($_SERVER['DOCUMENT_ROOT'] . '/quote/controller/randomClass.php');
	
	$getRandomQuote = new randomQuote();
	$getData = $getRandomQuote->sortData($data = "");
	$list = $getData['list'];
	$randomise  = $getData['randomise'];

	echo '<div align="center">';
	echo '<strong>"&nbsp;</strong>'.$list[$randomise][0].'<strong>&nbsp;"</strong>';
	echo '<br><br>';
	echo 'By &nbsp;<i><strong>'.$list[$randomise][1].'</strong></i>';
	echo '</div>';

?>

</body>
</html>