<html>
<head>
</head>
<body>
<?php
$dbName = "C:\Users\1ceballom\Desktop\Supermarket.mdb";
$conn = odbc_connect("Driver=(Microsoft Access Driver (*.mdb)) ; Dbq=$dbName",""," ")
$sql = "SELECT * FROM tProducts";

$rst = odbc_exec($conn,$sql);
// --- Prepare the sql statement


echo "<table>";
while ($row = odbc_fetch_row($rst)) {
	echo "<tr><td width='150' style = 'border: 1px solid black;'>"
	echo odbc_result($rst,"prodID");
	echo "<tr><td width='500' style = 'border: 1px solid black;'>"
	echo odbc_result($rst,"prodDescription");
	echo "<tr><td width='150' style = 'border: 1px solid black;'>"
	echo odbc_result($rst,"prodUnitPrice");
echo "</td></tr>";
)
echo "</table>";

odbc_close($conn);
?>
</body>
</html>