<!DOCTYPE html>
<html lang="en">

<head>
<link href="css/data.css" rel="stylesheet" type="text/css" media="screen" />
<script src="js/jquery-1.12.3.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title> 
	Post a quote
</title>

</head>
<body><br>

<div align="center">

 <nav>
  <a href="random.php">Random Quotes</a> |
  <a href="insertQuote.php">Insert Quote</a> |
  <a href="quoteList.php">View All Quotes</a> 
</nav><br>

<h4><strong>Post A Quote</strong></h4>

<form class="form-inline" action="../model/processInsert.php" method="post">
<div class="form-group">
    <label for="quote">Quote:&nbsp;</label>
     <textarea class="form-control" name ="quote" rows="3" placeholder="Enter a quote" required></textarea>
  </div>&nbsp;
  <div class="form-group">
    <label for="author">Author:&nbsp;</label>
    <input type="text" class="form-control" name="author" placeholder="Enter the name of author" required>
  </div>&nbsp;
  <button type="submit" class="btn btn-primary">Save Qoute</button>
</form>

</div>

</body>
</html>

