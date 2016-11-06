<?php

	class randomQuote{
		
		public function setQuote(){
			include_once($_SERVER['DOCUMENT_ROOT'] . '/quote/config/connect.php'); 			
			$query = "SELECT * FROM random_quote ORDER BY time ASC";
			$result = $mysqli->query($query);
			while ($row = $result->fetch_array(MYSQLI_BOTH)){
				 $data[] = $row;										
			}
			return $data;			
		}
		
		public function sortData($data){
			$data = $this->setQuote();
			$list = array();
			foreach ($data as $key => $value){
				array_push($list, array($value[1],$value[2]));
			}
			$size = count($list);
			$randomise = rand(0,$size-1);
			$sorted = array("list" => $list,"randomise" => $randomise);	
			return $sorted;
		}
		
		public function insertQuote($quote,$author,$time){
		  	include_once($_SERVER['DOCUMENT_ROOT'] . '/quote/config/connect.php'); 	 			
			$query = "INSERT INTO random_quote (quote,author,time) VALUES ('$quote','$author','$time')";
			$mysqli->query($query);		
		}
		
		public function deleteQuote($id){
		  	include_once($_SERVER['DOCUMENT_ROOT'] . '/quote/config/connect.php'); 				
			$query = "DELETE FROM random_quote WHERE id='$id'";
			$mysqli->query($query);				
		}
		
		
		public function updateQuote($id){
		  	include_once($_SERVER['DOCUMENT_ROOT'] . '/quote/config/connect.php'); 	  			
			$query = "SELECT * FROM random_quote WHERE id='$id'";
					
			$result = $mysqli->query($query);
			while ($row = $result->fetch_array(MYSQLI_BOTH)){
				 $quote = $row['quote'];
				 $author = $row['author'];
				 $data = array("quote" => $quote,"author" => $author);					 
			}
			return $data;	  
		}
		
		public function saveQuoteUpdate($quote,$author,$id){
		  	include_once($_SERVER['DOCUMENT_ROOT'] . '/quote/config/connect.php'); 	 			
			$query = "UPDATE random_quote SET quote='$quote',author='$author' WHERE id='$id';";
			$mysqli->query($query);		
		}
		
		
	}


?>