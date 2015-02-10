<html>
<body>

<p><h3>Sign Up<h3></p>
<?php

$FirstName=1;
$LastName=2;
$City=3;
$PhoneNumber=4;
$Email=5;

# ---- Link to another page ---- #
echo "<table>";
	echo "<tr>";
	echo "<td><form action=\"WelcomePageV1.php\" method=\"post\"></br>\n";
	echo "Email: <input type=\"text\" name=\"". $Email. "\"></br>\n";
	echo "Password: <input type=\"text\" name=\"".$Email. "\"></br>\n";
	echo "<input type=\"submit\"></br>\n";
	echo "</form>\n";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
?>
</body>
</html>