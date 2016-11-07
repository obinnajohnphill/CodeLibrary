   <?php  
   
	$database = array(array("ServerDetails",'localhost','root','xxxx','quote') );  
	$localhost  = $database[0][1];
	$username = $database[0][2];
	$password =  $database[0][3];
	$databaseName =  $database[0][4];
    
	$mysqli = new mysqli($localhost,$username,$password,$databaseName);
  
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
			  					  
?>