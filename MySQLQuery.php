<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
 <title>Title of the document</title>
 <meta name="description" content="AFK Airport V0.01" />
 <meta name="keywords" content="type, keywords, here" />
 <meta name="author" content="Your Name" />
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<style>
table{ 
	border-collapse:collapse; 
}
td, tr {
;width:800px;
}
</style>
<body>

<?php
// ---- define variables----------------------------------------------------------------------
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myhighschool";
echo "<font face=\"Comic Sans MS\">";

// ---- Get the values passed through the REQUEST--------------------------------------------
	if (isset($_REQUEST["submit"])) {
	$action = $_REQUEST["Enter"];
}

//---- Main Prog
//ReadRecords1();
//ReadRecords2();

DropDownMenu();
// ---- Functions -----------------------------------------------------------

function ReadRecords1(){
	global $servername, $username, $password, $dbname;

	//connect to the database----------
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die ("Connection failed: " . mysqli_connect_error());
	}

	// prepare the sql statement and send it to the database----------

	$sql = "SELECT claID, claSubject, claRoomID FROM tclasses";

	$result = mysqli_query($conn, $sql);
// dont forger to do all this--------------------------------------------
	//Loop through the resulting set of records (recordset)
	if (mysqli_num_rows($result) > 0 ) {
		//output data of each row	
		echo "<div style=\"align:center\">";
		echo "<table align=\"center\">\n";
		echo "<tr>\n";
		echo "<th>Class ID</th>\n";
		echo "<th>Class Room ID</th>\n";
		echo "<th>Class Subject</th>\n";
		echo "</tr>\n\n";

		$c=0;
		while($row = mysqli_fetch_assoc($result)) {
			// alternating colors
			$c++;
			if ($c/2 == intval($c/2)) {
				 $bc ="#DDDDDD";
			} else {
				 $bc ="#FF9900";
			}
		
			echo "<tr>\n";
			echo "<td style=\"width:100px; background-color:" .$bc ."\">" .$row["claID"] ."</td>\n";
			echo "<td style=\"width:100px; background-color:" .$bc ."\">" .$row["claRoomID"] ."</td>\n";
			echo "<td style=\"width:100px; background-color:" .$bc ."\">" .$row["claSubject"] ."</td>\n";
			echo "</tr>\n\n";
		}
		
			echo "</table>\n\n";
			echo  "</div>";
	} else {
		echo "0 results\n";
	
	}

}
	
	
function ReadRecords2(){
	global $servername, $username, $password, $dbname;
	//connect to the database----------
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die ("Connection failed: " . mysqli_connect_error());
	}

	// prepare the sql statement and send it to the database----------

	$sql = "SELECT * FROM (tstudents INNER JOIN tenrollments 
			ON tstudents.stuID = tenrollments.enrStudentID) 
			INNER JOIN tclasses ON tenrollments.enrClassID = tclasses.claID 
			ORDER BY claSubject, claID, stuLastName, stuFirstName";

	$result = mysqli_query($conn, $sql);
// dont forger to do all this--------------------------------------------
	//Loop through the resulting set of records (recordset)
	if (mysqli_num_rows($result) > 0 ) {
		//output data of each row
		echo "</br>";
		echo "</br>";
		echo "<div style=\"align:center\">";
		echo "<table align=\"center\">\n";
		echo "<tr>\n";
		echo "<th>Class ID</th>\n";
		echo "<th>First and Lastname</th>\n";
		echo "<th>Student ID</th>\n";
		echo "</tr>\n\n";
		
		$cl="";
 		$c=0;
		
		while($row = mysqli_fetch_assoc($result)) {
			if ($row["claID"] != $cl){
				// --- Echo the Class Suject if needed (1rst record of each class)
				echo "<tr>\n";
				echo "<td style=\"width:200px;background-color:#FF9900;\">" .$row["claID"] ."</td>\n";
				echo "<td style=\"background-color:#FF9900;\">" .$row["claSubject"] ."</td>\n";
				echo "<td style=\"width:200px;background-color:#FF9900;\">&nbsp</td>\n";
				echo "</tr>\n\n";
				
				$cl = $row["claID"];
			}

			// --- Echo the student info
			// alternating colors
			$bc ="#FFFFFF";
			$c++;
			if ($c/2 == intval($c/2)) {
				$bc ="#DDDDDD";
			}

			echo "<tr style=\"background-color: $bc \">\n";
			echo "<td>&nbsp</td>";
			echo "<td>" .$row["stuLastName"] .", " .$row["stuFirstName"] ." </td>";
			echo "<td>" .$row["stuID"] ."</td>";
			echo "</tr>";
			
		}
		
		echo "</table>\n\n";
		echo  "</div>";
		
	} else {
		echo "0 results\n";
	
	}
	
	mysqli_close($conn);
}

function DropDownMenu(){
	global $servername, $username, $password, $dbname;
		//connect to the database----------
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
		die ("Connection failed: " . mysqli_connect_error());
		}

		// prepare the sql statement and send it to the database----------

		$sql = "SELECT DISTINCT claID, claSubject, claRoomID FROM tclasses
				ORDER BY claID, claSubject, claRoomID";
				$result = mysqli_query($conn, $sql);

			mysql_data_seek($result, 5);
			echo "<select>";
			echo "<option value=\"\">Class ID</option>";
			while($row = mysqli_fetch_assoc($result)) {
			echo "<option value=".$row["claID"] .">".$row["claSubject"] . "</option>";
			}
			echo "</select>";
			echo "<select>";
			echo "<option value=\"\">Class Subject</option>";
			while($row = mysqli_fetch_assoc($result)) {
			echo "<option value=".$row["claSubject"] .">".$row["claSubject"] . "</option>";
			}
			echo "</select>";
			echo "<select>";
			echo "<option value=\"\">Room ID</option>";
			while($row = mysqli_fetch_assoc($result)) {
			echo "<option value=".$row["claRoomID"] .">".$row["claRoomID"] . "</option>";
			}
			echo "</select>";
		mysqli_close($conn);
}
?>

</body>
</html>