
<?php
	require_once("db.txt");
     // $a=$_REQUEST['meetingdate'.$i];
	for($i=0; $i<$_REQUEST['count']; $i++){
		if($_REQUEST['meetingdate'.$i]!=""){
			$sql_update = "UPDATE [Meeting] SET 
					[Complete Date] = '".$_REQUEST['meetingdate'.$i]."',
					[Staus]=1
					where [ID]='".$_REQUEST['id'.$i]."' ";
			odbc_exec($conn, $sql_update) or die(odbc_errormsg($conn));
			//echo $sql_update. "<br />";
                      echo '<META http-equiv="refresh" content="0;URL=MeetingList.php"> '; 
			
		
		}
	}
	
?>
