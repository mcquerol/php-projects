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
echo "Thank you, \"".$FirstName ." " .$LastName ."\"</br>\n";
echo "You live in, \"".$City ."\"</br>\n";
echo "Your Email is, \"".$Email ."\"</br>\n";
echo "Your Phone Number is, \"".$PhoneNumber ."\"</br>\n";
$file = fopen("C:\Users\\1ceballom\Desktop\\test.txt","a")or die("Unable to open file!");
	fwrite($file, $FirstName ."\t" 
				.$LastName ."\t"
				.$City ."\t"
				.$Email ."\t"
				.$PhoneNumber ."\t");
	fclose($file);
?>
</body>
</html>