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

// ---- define variables
$FirstName= "";
$LastName="";
$City="";
$Email="";
$PhoneNumber="";
// ---- get the arguments from the request
if (isset($_REQUEST["FirstName"])) {
	$FirstName = $_REQUEST["FirstName"];
} 
if (isset($_REQUEST["LastName"])) {
	$LastName = $_REQUEST["LastName"];
} 
if (isset($_REQUEST["City"])) {
	$City = $_REQUEST["City"];
} 
if (isset($_REQUEST["Email"])) {
	$Email = $_REQUEST["Email"];
} 
if (isset($_REQUEST["PhoneNumber"])) {
	$PhoneNumber = $_REQUEST["PhoneNumber"];
} 

echo "This is your information";
// ---- display the values
echo "Your first name is : " .$FirstName ."<br/>";
echo "Your Last name is : " .$LastName ."<br/>";
echo "Your City is : " .$City ."<br/>";
echo "Your Email is : " .$Email ."<br/>";
echo "Your PhoneNumber is : " .$PhoneNumber ."<br/>";
# ---- form page ---- #
echo "<form action=\"Form.php\" method=\"get\"></br>";
	echo "<input type=\"Submit\" value=\"Edit\" Name=\"Edit\">\n";
	echo "<input type=\"hidden\" value=\"".$FirstName ."\" Name=\"FirstName\">\n";
	echo "<input type=\"hidden\" value=\"".$LastName ."\" Name=\"LastName\">\n";
	echo "<input type=\"hidden\" value=\"".$City ."\" Name=\"City\">\n";
	echo "<input type=\"hidden\" value=\"".$Email ."\" Name=\"Email\">\n";
	echo "<input type=\"hidden\" value=\"".$PhoneNumber ."\" Name=\"PhoneNumber\">\n";
echo "</form>";
# ---- done page ---- #
echo "<form action=\"Done.php\" method=\"post\">\n";
	echo "<input type=\"Submit\" value=\"Submit\" Name=\"Submit\">\n";
	echo "<input type=\"hidden\" value=\"".$FirstName ."\" Name=\"FirstName\">\n";
	echo "<input type=\"hidden\" value=\"".$LastName ."\" Name=\"LastName\">\n";
	echo "<input type=\"hidden\" value=\"".$City ."\" Name=\"City\">\n";
	echo "<input type=\"hidden\" value=\"".$Email ."\" Name=\"Email\">\n";
	echo "<input type=\"hidden\" value=\"".$PhoneNumber ."\" Name=\"PhoneNumber\">\n";
echo "</form>";
?>

</body>
</html>