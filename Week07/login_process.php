<?php
session_start();
include("db.php");

$pagename="Your Login Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

	
	if(!empty($_POST['email']) || !empty($_POST['password']) ) {
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$SQLRetriveData = "select userEmail,userPassword from users where userEmail ='$email'";
		$exeSQL=mysqli_query($conn, $SQLRetriveData) or die (mysqli_error($conn));
		
		
		while ($arrayp=mysqli_fetch_array($exeSQL)){
			$retrivedEmail = $arrayp['userEmail'];
			$retrivedPassword = $arrayp['userPassword'];
		}
		

		
		if($email != $retrivedEmail){
			echo "<p> Email not recognized, login again";	
		}else{
			if($password != $retrivedPassword){
				echo "<p> Password not recognized, login again";
			}else{
				$SQLRetriveData = "select * from users where userEmail ='$email'";
				$exeSQL=mysqli_query($conn,$SQLRetriveData) or die (mysqli_error());
		
				while ($arrayp=mysqli_fetch_array($exeSQL)){
					$_SESSION['userid'] = $arrayp['userId'];
					$_SESSION['usertype'] = $arrayp['userType'];
					$_SESSION['fname'] = $arrayp['userFName'];
					$_SESSION['sname'] = $arrayp['userSName'];
				}
				
				echo "<p><b>Login Success</b></p> ";	
				echo "<p>Hello ".$_SESSION['fname']." ".$_SESSION['sname'];	
				echo "<p>You have successfully logged in as a hometeq Customer!";	
				echo "<p>Continue shopping for <a href='index.php'>Home Tech</a>";	
				echo "<p>View your <a href='basket.php'>Smart Basket</a>";	
			}
		}
		
	} else {
		echo "<p> Both email and password fields need to be filled in ";	
	}
	
	
include("footfile.html"); //include head layout
echo "</body>";
?>