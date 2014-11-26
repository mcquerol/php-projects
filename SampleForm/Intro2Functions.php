<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" 
"http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
 <title>Title of the document</title>
 <meta name="description" content="Type a Short Description Here" />
 <meta name="keywords" content="type, keywords, here" />
 <meta name="author" content="Your Name" />
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="Style.css" /> 
 </head>
<body>
<?php
echo "<font face=\"Comic Sans MS\" color=\"blue\">";
// ---- define variables
$step="1";
$FirstName="";
$LastName="";
$City="";
$Email="";
$PhoneNumber="";


// ---- get the values passed through the Request

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
if (isset($_REQUEST["step"])) {
	$step = $_REQUEST["step"];
}
// ----  Main Prog
if ($step=="3"){
	fDone ();
}elseif ($step=="2") {
	fConfirm ();
}else{
	fForm ();
}
// ---- Functions -----------------------------------------------------------------
function fForm() {
global 		$FirstName,
			$LastName,
			$City,
			$Email,
			$PhoneNumber;
	// ----- write the form
	echo "<p><h4>Please fill in the form</h3><p></br>";
	# ---- Link to another page ---- #
	echo "<form action=\"Intro2Functions.php\" method=\"post\"></br>";
	# ---- This is the form ---- #
	echo "First Name: <input type=\"text\" name=\"FirstName\" value=\"" .$FirstName. "\"></br>\n";
	echo "Last Name: <input type=\"text\" name=\"LastName\" value=\"" .$LastName. "\"></br>\n";
	echo "City: <input type=\"text\" name=\"City\" value=\"" .$City. "\"></br>\n";
	echo "E-mail: <input type=\"text\" name=\"Email\" value=\"" .$Email. "\"></br>\n";
	echo "Phone Number: <input type=\"text\" name=\"PhoneNumber\" value=\"" .$PhoneNumber. "\"></br>\n";
	# ---- Submit button ---- #
	echo "<input type=\"submit\" name=\"submit\" value=\"Submit\"</br>\n";
	echo "<input type=\"hidden\" value=\"2\" Name=\"step\">\n";
	echo "</form>\n";
}
function fConfirm() {
global 		$FirstName,
			$LastName,
			$City,
			$Email,
			$PhoneNumber;
	echo "<h4>This is your information</h4><br/>";
	// ---- display the values
	echo "Your first name is : " .$FirstName ."<br/>";
	echo "Your Last name is : " .$LastName ."<br/>";
	echo "Your City is : " .$City ."<br/>";
	echo "Your Email is : " .$Email ."<br/>";
	echo "Your PhoneNumber is : " .$PhoneNumber ."<br/>";
	# ---- form page ---- #
		echo "<form action=\"Intro2Functions.php\" method=\"get\"></br>";
			echo "<input type=\"Submit\" value=\"Edit\" Name=\"Edit\">\n";
			echo "<input type=\"hidden\" value=\"".$FirstName ."\" Name=\"FirstName\">\n";
			echo "<input type=\"hidden\" value=\"".$LastName ."\" Name=\"LastName\">\n";
			echo "<input type=\"hidden\" value=\"".$City ."\" Name=\"City\">\n";
			echo "<input type=\"hidden\" value=\"".$Email ."\" Name=\"Email\">\n";
			echo "<input type=\"hidden\" value=\"".$PhoneNumber ."\" Name=\"PhoneNumber\">\n";
			echo "<input type=\"hidden\" value=\"1\" Name=\"step\">\n";
		echo "</form>";
# ---- done page ---- #
		echo "<form action=\"Intro2Functions.php\" method=\"post\">\n";
			echo "<input type=\"Submit\" value=\"Submit\" Name=\"Submit\">\n";
			echo "<input type=\"hidden\" value=\"".$FirstName ."\" Name=\"FirstName\">\n";
			echo "<input type=\"hidden\" value=\"".$LastName ."\" Name=\"LastName\">\n";
			echo "<input type=\"hidden\" value=\"".$City ."\" Name=\"City\">\n";
			echo "<input type=\"hidden\" value=\"".$Email ."\" Name=\"Email\">\n";
			echo "<input type=\"hidden\" value=\"".$PhoneNumber ."\" Name=\"PhoneNumber\">\n";
			echo "<input type=\"hidden\" value=\"3\" Name=\"step\">\n";
		echo "</form>";
}
function fDone() {
global 		$FirstName,
			$LastName,
			$City,
			$Email,
			$PhoneNumber;
	echo "Thank you, \"".$FirstName ."" .$LastName ."\"</br>\n";
	echo "You live in, \"".$City ."\"</br>\n";
	echo "Your Email is, \"".$Email ."\"</br>\n";
	echo "Your Phone Number is, \"".$PhoneNumber ."\"</br>\n";
	echo "<h3>Look in your desktop !<h3>";
		$file = fopen("C:\Users\\1ceballom\Desktop\\test.txt","a")or die("Unable to open file!");
		fwrite($file, $FirstName ."\t" 
					.$LastName ."\t"
					.$City ."\t"
					.$Email ."\t"
					.$PhoneNumber ."\t");
		fclose($file);
}
?>
</body>
</html>