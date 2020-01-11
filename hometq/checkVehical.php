<?php
include("db.php");
$pagename="Edit or remove vehicals"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page


$prodid=$_GET['u_prod_id'];

echo "<p>Selected product Id: ".$prodid;
$SQL="select prodName, prodPicNameLarge , prodDescripLong , prodPrice ,prodQuantity from Product where prodId='$prodid'";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
echo "<table style='border: 0px'>";

while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
echo "<img src=images/".$arrayp['prodPicNameLarge']." height=200 width=200></a>";

echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name as contained in the array
echo "<p><h6>".$arrayp['prodDescripLong']."</h6>"; //display product des as contained in the array
echo "<p><h5>£".$arrayp['prodPrice']."</h5>"; //display product name as contained in the array
echo "<p><h5>Number left in the stock : ".$arrayp['prodQuantity']."</h5>"; //display product quantity  as contained in the array
echo "<p>Number to be purchased: ";
//create form made of one text field and one button for user to enter quantity
//the value entered in the form will be posted to the basket.php to be processed
echo "<form action=admin.php method=post>";

echo "<input type=submit value='Remove Vehical'>";
//pass the product id to the next page basket.php as a hidden value
echo "<input type=hidden name=vehicalId value=".$prodid.">";
echo "</form>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
include("footfile.html"); //include head layout
echo "</body>";
?>