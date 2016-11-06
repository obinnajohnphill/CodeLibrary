<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/quote/controller/randomClass.php');

if(!empty($_POST['quote'] AND $_POST['author'])) {
	$id =  $_POST['id'];
    $quote =  $_POST['quote'];
	$author = $_POST['author'];
    $getRandomQuote = new randomQuote();
	$getRandomQuote->saveQuoteUpdate($quote,$author,$id);  
    header("Location: ../view/quoteList.php?msg3=You have updated a new record successfully"); 
    exit;	 
}  


?>