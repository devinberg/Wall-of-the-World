<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=http://www.example.com/wall/"></head>
<body>
<?php
if (($_POST['name']) != '')
	return true;
$textInput = $_POST['textInput'];
if (($textInput) == '')
	return true;
$textInput = htmlEntities($textInput, ENT_QUOTES);
$textInput = stripslashes($textInput);
$timestamp = date("Y-m-d H:i:s");
$storageFile = "storageFile.txt";
$fh = fopen($storageFile,'a') or die("can't open file");
$stringDATA = "[{$timestamp}Z] {$textInput}\n";
fwrite($fh,$stringDATA);
fclose($fh);
mail('mail@example.com', $timestamp . ' Post submitted.', $stringDATA);
?>
</body>
</html>
