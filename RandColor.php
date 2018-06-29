<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
 <title>RandColor</title>
 <meta name="description" content="Generates a random Hexadecimal and displays the color" />
 <meta name="keywords" content="type, keywords, here" />
 <meta name="author" content="Your Name" />
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>

<?php

RandHexColor();
// ---- Functions -----------------------------------------------------------
function RandHexColor() {
    $k = chr(rand(65,70));

	for ($i=1;$i<6;$i++) {
			if (rand(0,1)==1) {
				$k = $k .rand(0,9);
			}else{
				$k = $k .chr(rand(65,70));
			}
		}
		echo chr(35) .$k ."\n"; // --- chr(35) is ASCII for #
		echo "<table>\n";
		echo "<tr>\n";
		echo "<td style=\"background-color:". chr(35).$k ."\" width=\"100\" height=\"100\";></td>\n";
		echo "</tr>\n";
		echo "</table>";

		
}


?>

</body>
</html>