<?php
	require_once("Header.php");
	//$id=$_REQUEST['id'];
	 $oldPassword=md5($_REQUEST['oldPassword']);
     $newPassword=md5($_REQUEST['newPassword']);
	 $retPassword=md5($_REQUEST['retPassword']);
	
	 $result=mysqli_query($conn,"SELECT * FROM `employee` WHERE `EmployeeCode`='".$_SESSION['empcode']."'") or die(mysqli_error());
	$row=mysqli_fetch_array($result);
	
    echo "<br /><br /><br /><br /><div class='container'><div class='bs-example'>";
	if($oldPassword == $row['EmployeePassword']){
		if($newPassword == $retPassword){
			mysqli_query($conn,"UPDATE `employee` SET `EmployeePassword`='".$newPassword."' WHERE `EmployeeCode`='".$_SESSION['empcode']."'") or die(mysql_error());
			echo "<div class='alert alert-primary alert-error' style='background-color: #008000;color: #ffffff;'>Your password has been reset</div>";
		}
		else{
			echo "<div class='alert alert-warning alert-error' style='background-color: #FFA500;color: #ffffff;'>New Password does not match with the Retype Password</div>";
		}
	}
	else{
		echo "<div class='alert alert-danger alert-error' style='background-color: #990000;color: #ffffff;'>Current Password does not match.</div>";
	}
    echo "</div></div>";
  
?>