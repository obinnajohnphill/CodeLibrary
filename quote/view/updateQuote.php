<!DOCTYPE html>
<html lang="en">

<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = $_GET['id'];
require_once($_SERVER['DOCUMENT_ROOT'] . '/quote/controller/randomClass.php');
$getRandomQuote = new randomQuote();	
$getData = $getRandomQuote->updateQuote($id);
?>

<head>
<link href="css/data.css" rel="stylesheet" type="text/css" media="screen" />
<script src="js/jquery-1.12.3.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title> 
	Update a quote
</title>

</head>
<body><br>

<div align="center">

 <nav>
  <a href="random.php">Random Quotes</a> |
  <a href="insertQuote.php">Insert Quote</a> |
  <a href="quoteList.php">View All Quotes</a> 
</nav><br>

<h4><strong>Update A Quote</strong></h4>

<form class="form-inline" action="../model/processUpdate.php" method="post" id="updateForm">
<div class="form-group">
    <label for="quote">Quote:&nbsp;</label>
   <textarea class="form-control" rows="3" name="quote" form="updateForm"><?php echo $getData['quote'];?></textarea>
  </div>&nbsp;
   <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="form-group">
    <label for="author">Author:&nbsp;</label>
    <input type="text" class="form-control" name="author" value="<? echo $getData['author'];?>">
  </div>&nbsp;
  <button type="submit" class="btn btn-primary">Save Quote Update</button>
</form>

</div>

</body>
</html>

