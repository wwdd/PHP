<?php
// Load Data File
$xml=simplexml_load_file("data.xml");

// Add in HTML
?>
<html>
<head>
<?php echo "<title>$xml->title</title>"; ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style>
*{
 font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>
<?php
echo "<h1>$xml->title</h1>"; 
echo "<iframe width=\"70%\" height=\"60%\" src=\"//www.youtube.com/embed/$xml->identifier\" frameborder=\"0\" allowfullscreen></iframe>". "<p>";
echo $xml->description . "<br><br>";
echo "Copy Short Url: <input type=\"text\" name=\"share\" value=\"$xml->short_url\" style=\"width:30%\">";
?>
</body>
</html>