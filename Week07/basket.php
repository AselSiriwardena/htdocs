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

 // echo $_POST["h_prodid"];
 // echo "<br>";
 // echo $_POST["quantity"];
 // echo "<br>";
 
 $reququantity = $_POST["quantity"];
 $newprodid = $_POST["h_prodid"];
 $_SESSION['basket'][$newprodid]=$reququantity;
 
if (isset($_SESSION['basket'])) {
 
  
//echo "<p>id of selected product :".$newprodid."</h5> "; 
//echo "<p>Quantity of selected product :".$reququantity."</h5> "; 

//create a new cell in the basket session array. Index this cell with the new product id.
//Inside the cell store the required product quantity

//echo "<p>The doc id ".$newdocid." has been ".$_SESSION['basket'][$newdocid];
echo "<p>1 item added";

$total =0;
 
echo "<table>";
echo "  <tr>";
echo "    <th>Product Name</th>";
echo "    <th>Price</th> ";
echo "    <th>Quantity</th>";
echo "    <th>Subtotal</th>";
echo "    <th></th>";

echo "  </tr>";

foreach ($_SESSION['basket'] as $index => $value){
	 
$SQL="select prodName, prodPrice ,prodQuantity from Product where prodId='$index'";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());

while ($arrayp=mysqli_fetch_array($exeSQL)){

echo "<tr>";
echo "<td>".$arrayp['prodName']."</td>";
echo "<td>".$arrayp['prodPrice']."</td>";
echo "<td>".$value."</td>";
echo "<td>".$value*$arrayp['prodPrice']."</td>";

$total = $total + $value*$arrayp['prodPrice'];


 }
} 

echo "</tr>";
 echo "
 <tr>
 <td colspan='3' >Total</td>
 <td>".$total."</td>
 <td></td>
 </tr>";
echo "</table>";
echo "<a href = clearbasket.php>Clear Basket</a>";
}
else 
{
  echo "Current basket unchanged ";
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