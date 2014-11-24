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
echo "<font face=\"Comic Sans MS\" color=\"blue\">";
// ----- define variables
$FirstName= "";
$LastName="";
$City= "";
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
// ----- write the form
echo "<p><h3>Please fill in the form<h3><p></br>";
# ---- Link to another page ---- #
echo "<form action=\"Confirm.php\" method=\"post\"></br>";
# ---- This is the form ---- #
echo "First Name: <input type=\"text\" name=\"FirstName\" value=\"" .$FirstName. "\"></br>\n";
echo "Last Name: <input type=\"text\" name=\"LastName\" value=\"" .$LastName. "\"></br>\n";
echo "City: <input type=\"text\" name=\"City\" value=\"" .$City. "\"></br>\n";
echo "E-mail: <input type=\"text\" name=\"Email\" value=\"" .$Email. "\"></br>\n";
echo "Phone Number: <input type=\"text\" name=\"PhoneNumber\" value=\"" .$PhoneNumber. "\"></br>\n";
# ---- Submit button ---- #
echo "<input type=\"submit\" name=\"submit\" value=\"Submit\"</br>\n";
echo "</form>\n";



?>
</body>
</html>