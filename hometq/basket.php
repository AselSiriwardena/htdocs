<?php
session_start();
include("db.php");
$pagename="Smart Basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

if (isset($_POST["quantity"]) {
 $newprodid = $_POST["h_prodid"];
 $reququantity = $_POST["quantity"];
 $_SESSION['basket'][$newprodid]=$reququantity;
 
//echo "<p>id of selected product :".$newprodid."</h5> "; 
//echo "<p>Quantity of selected product :".$reququantity."</h5> "; 

//create a new cell in the basket session array. Index this cell with the new product id.
//Inside the cell store the required product quantity
$_SESSION['basket'][$newprodid]=$reququantity;
//echo "<p>The doc id ".$newdocid." has been ".$_SESSION['basket'][$newdocid];
echo "<p>1 item added";

} else {
  //Display "Current basket unchanged " message
}
 

//capture the ID of selected product using the POST method and the $_POST superglobal variable
//and store it in a new local variable called $newprodid
//capture the required quantity of selected product using the POST method and $_POST superglobal variable
//and store it in a new local variable called $reququantity
//Display id of selected product
//Display quantity of selected product

include("footfile.html"); //include head layout
echo "</body>";
?>