<?php
$item1=$_POST['empid'];
$item2=$_POST['name'];
$item3=$_POST['post'];
$item4=$_POST['email'];
$item5=$_POST['company'];
$con=mysqli_connect("localhost","root","root")
or die("Access denied");
$res=mysqli_select_db($con,"futurity");
if(!$res)
echo"Connetion Faliur";
else
$qry="insert into w1698430_employee (w1698430_empId,w1698430_empFullName,w1698430_empPosition,w1698430_empEmail,w1698430_compCode) values('$item1','$item2','$item3','$item4','$item5')";
$rslt=mysqli_query($con,$qry)
or die(mysqli_error($con));
if($rslt)
{
	header( "Location: getemployee.php?id='$item1'" ) ;
}
mysqli_close($con);
?>