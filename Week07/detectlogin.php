<?php
if(isset($_SESSION['userid'])){
	echo $_SESSION['fname']." ".$_SESSION['sname'];
}

?>