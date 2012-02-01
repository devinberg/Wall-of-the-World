<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Wall of the World</title>
</head>

<body>
<?php
$data = array_slice(file('storageFile.txt'), -30);

foreach ($data as $line) {
    echo "<pre>$line</pre>";
}
?>

<div id="postInput" style="width:100%;min-width:1000px;position:fixed;bottom:0px;left:0px;border-top:1px dashed #aaa;padding:20px 0 20px 5px;background:#ddd;">
<form action="process.php" method="POST">
<input type="text" name="textInput" maxlength="160" style="width:93%;">
<input type="text" name="name" style="display: none; visibility: hidden;">
<input type="submit" value="Post">
</form></div>

</body>
</html>
