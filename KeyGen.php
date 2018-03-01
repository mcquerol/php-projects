<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
 <title>KeyGen</title>
 <meta name="description" content="Generates a random string with digits and letters" />
 <meta name="keywords" content="type, keywords, here" />
 <meta name="author" content="Your Name" />
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>
<?php
echo RandString();


// ---- Functions -----------------------------------------------------------


function RandString(){
		for ($i=0;$i<4;$i++) {
			for ($n=0;$n<3;$n++){
			echo (rand(0,9));
			}
			for ($l=0;$l<2;$l++){
			echo chr(rand(65,90));
			}
		}
}

?>

</body>
</html>