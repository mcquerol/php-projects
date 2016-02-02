<html>
<head>

</head>
<body>

<?php
	$Step=0;
	if (isset($_REQUEST["Str"])){
		$String = $_REQUEST["Str"];
		$Step = $_REQUEST["S"];
	}
	if($Step == 2){
		ReverseString();
	} else {
		StringForm();
	}
	function ReverseString(){
		global $String;
			echo "<h2>Original</h2>\n";
			for($X=0;$X<strlen($String);$X++){
				echo $String[$X];
			}

			echo "<h2>Reversed</h2>\n";
			$TEMP="";
			for ($C=0;$C<strlen($String)/2;$C++) {
				$TEMP = $String[$C];
				$String[$C] = $String[(strlen($String)-1)-$C];
				$String[(strlen($String)-1)-$C] = $TEMP;
			}
			echo $String;
	}
	// ---------------------------------------------------------
function StringForm(){
		global $String,$Step;
		echo "<h2>Type some words</h2>\n\n";
		echo "<form action=\"ReverseString.php\"method=\"post\">\n";
		echo "<input type=\"text\" name=\"Str\" value=\"".$String."\">\n";
		echo "<input type=\"Submit\" name=\"\"value=\"Reverse\">\n";
		echo "<input type=\"hidden\" name=\"S\" value=\"2\">\n";
		echo "</form>\n\n";
	}
?>
</body>
</html>