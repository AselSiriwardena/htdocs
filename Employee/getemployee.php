<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","w1698419");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT w1698419_empId as empID FROM w1698430_employee WHERE w1698430_empId=1");

echo "
<h1>New Employee Confirmation</h1>
<p>Your new employee has been added successfully.</p>";

while($row = mysqli_fetch_array($result))
{
echo "Added employee id: " . $row['w1698430_empId'] . "<br>";
echo "Added full name: " . $row['w1698430_empFullName'] . "<br>";
echo "Added position: " . $row['w1698430_empPosition'] . "<br>";
echo "Added email: " . $row['w1698430_empEmail'] . "<br>";
echo "Added company code: " . $row['w1698430_compCode'] . "<br>";
}

mysqli_close($con);
?>