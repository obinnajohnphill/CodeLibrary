<!DOCTYPE html>
<html lang="en">

<?php 
$msg = $_GET['msg'];
$msg2 = $_GET['msg2'];
$msg3 = $_GET['msg3'];
?>
			 
<head>
<link href="css/data.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title> 
	List of quotes
</title>
</head>

<body><br>
<div align="center">
  <nav>
  <a href="random.php">Random Quotes</a> |
  <a href="insertQuote.php">Insert Quote</a> |
  <a href="quoteList.php">View All Quotes</a> 
</nav><br>

<?php
 if (!empty($msg)){
	echo '<h3 style="color:green;"><strong>'.$msg.'</strong></h3><br>'; 
 }
 if (!empty($msg2)){
	echo '<h3 style="color:red;"><strong>'.$msg2.'</strong></h3><br>';  
 }
  if (!empty($msg3)){
	echo '<h3 style="color:green;"><strong>'.$msg3.'</strong></h3><br>';  
 }
?>

<h4><strong>Here is a list of all quotes</strong></h4><br>
<table class="table table-striped">
			<thead>
				<tr>								
				<th><i>Quote</i></th>
				<th><i>By Which Author</i></th>
				<th><i>Time Posted</i></th>										
				</tr>
			</thead>
			<tbody>
			
	<?php
			 
			 require_once($_SERVER['DOCUMENT_ROOT'] . '/quote/controller/randomClass.php');
	         $getRandomQuote = new randomQuote();
			 $data =  $getRandomQuote->setQuote();
			 
			 foreach ($data as $key => $value){
				$id = $value[0];
				echo '<tr><td>'.$value[1].'</td>';
				echo '<td>'.$value[2].'</td>';	
				echo '<td>'.date('Y-m-d h:i:s',$value[3]).'</td>';
				echo '<td> <a href="updateQuote.php?id='.$id.'"><button type="button">EDIT</button></a></td>';
				echo '<td> <a href="../model/processInsert.php?id='.$id.'"><button type="button">DELETE</button></a></td></tr>';
				
			}
			 														  
	?>
	
</tbody>
</table></div>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
		//"iDisplayLength": 100,
        "order": [[ 1, "desc" ]],
		"bFilter": false,
		"bLengthChange": false,
		"bInfo": false,
		"bPaginate": false
    } );
} );
 //setInterval(function(){location.reload()},120000);
</script>

</body>
</html>

