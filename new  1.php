<html>
<head>
</head>
<body>
<?php
$FirstName=1;
$LastName=2;
$City=3;
$Telephone=4;
$Email=5;
if (isset($_REQUEST["FirstName"])) {
	$FirstName = $_REQUEST["FirstName"];
}	

if (isset($_REQUEST["LastName"])) {
	$LastName = $_REQUEST["LastName"];
}

if (isset($_REQUEST["City"])) {
	$City = $_REQUEST["City"];
}

if (isset($_REQUEST["Telephone"])) {
	$Telephone = $_REQUEST["Telephone"];
}

if (isset($_REQUEST["Email"])) {
	$Email = $_REQUEST["Email"];
}
if (isset($_REQUEST["submit"])) {
	$s = $_REQUEST["submit"];
	
	echo "<form action=\"Confirm.php\" method=\"post\">";
echo " First Name: <input type=\"text\" name=\"First Name\" value=\"".$FirstName ."\">\n";
echo " Last Name: <input type=\"text\" name=\"Last Name\" value=\"".$LastName ."\">\n";
echo " City: <input type=\"text\" name=\"City\" value=\"".$City ."\">\n";
echo " Telephone Number: <input type=\"text\" name=\"Telephone Number\" value=\"".$Telephone ."\"><br/>\n";
echo " Email: <input type=\"text\" name=\"Email\" value=\"".$Email ."\">\n";
echo " Submit: <input type=\"text\" name=\"Submit\" value=\"Submit\">\n";
echo "</form>\n";
?>
</body>
</html>