<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" 
"http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
 <title>Title of the document</title>
 <meta name="description" content="Type a Short Description Here" />
 <meta name="keywords" content="type, keywords, here" />
 <meta name="author" content="Your Name" />
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="mystyle.css" /> 
 </head>
<body>
<?php 


$NberOfCols=3;
$NberOfRows=3;
if (isset($_REQUEST["NberOfCols"])) {
	$NberOfCols = $_REQUEST["NberOfCols"];
	$NberOfRows = $_REQUEST["NberOfRows"];
}

echo "<table>\n"; 
for ($r=1;$r<=$NberOfRows;$r++){ 
	echo "	<tr>\n";
	for ($c=1;$c<=$NberOfCols;$c++){	
		if ($c==3) {
			$color="red";
			
		} else {
			$color="Darkblue";
		}
		
		echo "		<td style=\"border:1pt $color solid; width:100px;\">
		 $c x $r .</td>\n";
	}	
	echo "	</tr>\n";
	
} 
echo "</table>\n";
echo "Hello World\n";

#----------------------This is a form -----------------------
echo "<Form Action=\"MySecondPhp.php\" method=\"post\">\n";
echo "	Number of Columns: <input type=\"text\" value=\"\" Name=\"NberOfCols\"><br/>\n"; 
echo "	Number of Rows: <input type=\"text\" value=\"\" Name=\"NberOfRows\"><br/>\n";
echo " <input type=\"Submit\" value=\"Submit\" Name=\"Submit\"><br/>\n";
echo "</form>";
?> 
</body>
</html>