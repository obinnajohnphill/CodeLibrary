
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<body>

<div align="center"><h1>Test a random script</h1></div>
<?php

require_once('class.php');

$aggregates = array
  (
  array("Name",'Obinna Johnphill','Mark Rushton'),
  array("Cost Price",200,300),
  array("Sale Price",1900,1200)
  );
  
  
$admin = new opprtunityOwnerClass();
$admin->validate();


echo '<table style="width:100%">
			  <tr>
				<th>Opportunity Owner</th>
				<th>Margin Value</th> 
			  </tr>
  ';
  
 //$raw = print_r($aggregates,true);
 //echo str_replace(array("\r\n","\r","\n","\\r","\\n","\\r\\n"),"<br/>",$raw);



 $obinna = array($aggregates [1][1],$aggregates [2][1]);
 $mark = array($aggregates [1][2],$aggregates [2][2]);
   

  for ($row = 0; $row < 1; $row++) {
	  echo '<tr>
				<td>'.$aggregates [0][1].'</td>
				<td>'. array_sum($obinna).'</td>
               </tr>
                 <tr>
				<td>'.$aggregates [0][2].'</td>
				<td>'.array_sum($mark).'</td>
			  </tr>';
	  }

			echo '</table>';
			
    
?>
</body>
</html>