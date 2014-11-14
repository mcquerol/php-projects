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
# ---- Define Variables
$p=1;
# ---- Get the values passed through the REQUEST
if (isset($_REQUEST["p"])) {
	$p = $_REQUEST["p"];
}	

if (isset($_REQUEST["submit"])) {
	$s = $_REQUEST["submit"];
	if ($s=="<<") {
		$p=$p-1;
	}else{
		$p=$p+1;
	}
}

# ---- Value must be between 1 and 10
if ($p<1) {
	$p=1;
}

if ($p>10) {
	$p=10;
}


echo "$p <br/><br/><br/>\n";

# ---- Write the Previous link if needed
if ($p==1) {
	echo "Previous";
}else{
		echo "<a href=\"MyThirdPhp.php?p=" .($p-1). "\">Previous</a>\n";
}
# ---- Write the Next link if needed
if ($p==10) {
echo "Next";
}else{
		echo "<a href=\"MyThirdPhp.php?p=" .($p+1) . "\">Next</a>\n";		
}
echo "<hr/>\n";
# ----- Links could be replaced with a form and 2 buttons
echo "<form action=\"ConfirmCatalogue.php\" method=\"post\">";
echo "<input type=\"submit\" name=\"submit\" value=\"<<\">\n";
echo "<input type=\"submit\" name=\"submit\" value=\">>\">\n";
echo "<input type=\"hidden\" name=\"p\" value=\"" .$p ."\">\n";
echo "</form>\n";

?>
</body>
</html>
