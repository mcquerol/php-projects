<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" 
"http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
 <title>Intro 2 sessions</title>
 <meta name="description" content="Type a Short Description Here" />
 <meta name="keywords" content="type, keywords, here" />
 <meta name="author" content="Your Name" />
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
 <link rel="stylesheet" type="text/css" href="CataloguePHPstyle.css" /> 
 </head>
 <style>
 </style>
<body>
<?php

#--------Define variables
session_start();


#--------Get the values passed through the REQUEST

# ---- Main Code -----------
if (isset ($_SESSION["q"])){
	$_SESSION["q"] = $_SESSION["q"] +1;
}else{
	$_SESSION["q"] =1;
}


echo $_SESSION["q"];
#----- function ---------------- 

?> 
</body>
</html>​