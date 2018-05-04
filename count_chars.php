<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
 <title>Count Chars</title>
 <meta name="description" content="Counts the characters in a string" />
 <meta name="keywords" content="type, keywords, here" />
 <meta name="author" content="Your Name" />
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>
<?php

	$Step=0;
	$String="";
	if (isset($_REQUEST["Str"])){
		$String = $_REQUEST["Str"];
		$Step = $_REQUEST["S"];
	}
	if($Step == 2){
		countchars();
	} else {
		StringForm();
	}
	
	function countchars(){
		global $String;
			echo "<hr>";
			echo $String ."<br/>";
			echo "<hr>";
			$sum=0;
			for ($ch=13; $ch<=254; $ch++){
			$count=0;
			  for ($i=0; $i<strlen($String); $i++){
				if (chr($ch) == $String[$i] ){
				  $count++;
				  $sum++;
				}  
			  }
			  if ($count>0){
				if ($ch == 32){ // 32 in ASCII is [SPACE]
					echo "[SPACE] = ". $count ."<br/>";
				}elseif ($ch == 13){
					echo "[ENTER] = ". $count ."<br/>";
				}else{	
					echo chr($ch) ." = ". $count ."<br/>";
				}
			  }
			}
			echo "<h3>Total is : ". $sum ." bytes</h3><br/>";
	}
	function StringForm(){
		global $String,$Step;
			echo "<h2><u>Type some words</u></h2>\n\n";
			echo "<form action=\"count_chars.php\"method=\"post\">\n";
			echo "<textarea rows=\"10\" cols=\"50\" name=\"Str\"></textarea>";
			echo "<br/>";
			echo "<input type=\"Submit\" name=\"\" value=\"Count\">\n";
			echo "<input type=\"hidden\" name=\"S\" value=\"2\">\n";
			echo "</form>\n\n";
	}
?>