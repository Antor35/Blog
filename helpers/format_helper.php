<?php 
	/*
	 *formate Date
	 */
	function formatDate($date){
		return date('F j, Y, g:j a',strtotime($date));
	}

	/*
	 * shorten text
	 */
	function shortenText($text, $chars = 350){
		$text = $text." ";
		$text = substr($text, 0, $chars);
		$text = substr($text, 0, strrpos($text," "));
		$text = $text."...";
		return $text;
	}

	/* text formating */

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	 }


	 function isSame($a,$b){
	 	return true;
	 }

?>