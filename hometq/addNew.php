<?php
include("db.php"); 

$pagename="Add New Vehical"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<form action=upload.php method=post >";

echo "<p><b>Vehical Name:</b></p>";
echo "<input type=text name='name'><br>";
echo "<p><b>Vehical Description Short:</b></p>"; 
echo "<input type=text name='decS'><br>";
echo "<p><b>Vehical Description Long:</b></p>"; 
echo "<input type=text name='decL'><br>";
echo "<p><b>Vehical Price:</b></p>"; 
echo "<input type=text name='price'><br>";
echo "<p><b>Number Of New Vehicals:</b></p>";
echo "<input type=text name='num'><br>" ;

echo "  Select image to upload:";
echo "<input type=file name=fileToUpload id=fileToUpload> ";

echo "<input type=submit value=Upload Image name='submit'>";



echo "</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>