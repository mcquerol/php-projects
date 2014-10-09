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
$NberOfRows=3;
$NberOfCols=3;

 echo "<table>\n"; 
for ($r=1;$r<=$NberOfRows;$r++){ 
	echo "	<tr>\n";
	for ($c=1;$c<=$NberOfCols;$c++){	
		if ($c%2 == 0)
			return true;$color="red";
		} else {
			return false; $color="orange";{
			
		} else {
			$color="Darkblue";
		}
		
		echo "		<td style=\"border:1pt $color solid; width:100px;\">
		 $c x $r .</td>\n";
	}	
	echo "	</tr>\n";
	
} 
echo "</table>\n";

?> 
</body>
</html>