<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/quote/controller/randomClass.php');

if(!empty($_POST['quote'] AND $_POST['author'])) {
    $quote =  $_POST['quote'];
	$author = $_POST['author'];
	$time = time();
    $getRandomQuote = new randomQuote();
	$getRandomQuote->insertQuote($quote,$author,$time);  
    header("Location: ../view/quoteList.php?msg=You have add a new record successfully"); 
    exit;	 
}  

if(!empty($_GET['id'])) {
	$id = $_GET['id'];
    $getRandomQuote = new randomQuote();	
    $getRandomQuote->deleteQuote($id);
    header("Location: ../view/quoteList.php?msg2=You have deleted a record successfully"); 
    exit;
}    
  

?>