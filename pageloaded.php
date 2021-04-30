<html>
<head>
<title>number of times visitor loaded a page</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['counter']))
{
	$_SESSION['counter']+=1;
}
else
{
	$_SESSION['counter']=1;
}
echo"You have visited ".$_SESSION['counter']." time this page in this session";
?>
</body>
</html>