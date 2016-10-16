

<?php
    date_default_timezone_set('Asia/Calcutta');    
    require_once("datab.php");
    $q="SELECT MAX(MeetingID) as mid FROM meetingid";
    $result = mysqli_query($conn, $q) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    $mid=$row['mid'];
    
   

   if($mid>=1)
    {
    	 $mid=$mid+1;
        echo $MeetID = str_pad($mid, 4, '0', STR_PAD_LEFT);
    }
    else 

    {
         $mid=1;
       echo  $MeetID = str_pad($mid, 4, '0', STR_PAD_LEFT);
    }

 
   



    $Organizer= addslashes(strtoupper($_REQUEST['Organizer']));
    $Attendees = $_REQUEST['Attendees'];
    $Sub = addslashes(strtoupper($_REQUEST['Subject']));
    $Location = addslashes(strtoupper($_REQUEST['Location']));
    $meetingdate = strtoupper($_REQUEST['meetingdate']);
    $StartTime = addslashes(strtoupper($_REQUEST['StartTime']));
    $EndTime = strtoupper($_REQUEST['EndTime']);
    $Agenda = addslashes(strtoupper($_REQUEST['Agenda']));
   
    
    
	   $SQL1 ="INSERT INTO meetingid(Organizer,Subject,Location,Meetingdate,Status,MeetingID)
	   VALUES('$Organizer','$Sub','$Location','$meetingdate','0','$MeetID')"; 
           echo $SQL1;
	  $result1 = mysqli_query($conn, $SQL1) or die(mysqli_error($conn));   

         for ($i = 0; $i < count($Attendees); $i++) {
         $Attendee = $Attendees[$i];    
	 $SQL ="INSERT INTO newmeetings(Organizer,Attendees,Subject,Location,Meetingdate,StartTime,EndTime,Agenda,Status,MeetingID)
         VALUES('$Organizer','$Attendee','$Sub','$Location','$meetingdate','$StartTime','$EndTime','$Agenda','0','$MeetID')"; 
         echo $SQL;
	 $result = mysqli_query($conn, $SQL) or die(mysqli_error($conn));
                 }
			//------------insert code
			//---------- mail code start------------
			/*if($result){
			require_once "/bs/class.phpmailer.php";
			$mail = new PHPMailer();
			$mail->IsSMTP();                                      // set mailer to use SMTP
			$mail->Host = "125.16.64.67";  // specify main and backup server
			$mail->SMTPAuth = true;     // turn on SMTP authentication
			$mail->Username = "erpadministrator@mempl.com";  // SMTP username
			$mail->Password = "access@1234"; // SMTP password
			$mail->SMTPDebug = 1;
			//Get user School Name and schoolEmail
			$mail->From = $Email;
			//$mail->FromName = $Comp['Name'];
			//Get user Name and Email 
			if($Email != ""){
			$mail->AddAddress("$Email", "$Name");
			}
			//CC Email 
			/*if($FatherEmail != ""){
			$mail->addCC("$FatherEmail", "$FatherName");
			}
			if($MotherEmail != ""){
				$mail->addCC("$MotherEmail", "$MotherName");
			}
			//BCC Email
			$mail->addBCC("erpadministrator@mempl.com", "MEM ERP");
			*/
			/*$subject = "Application Form - $SysGenNo // Receipt Acknowledgment.";
			$body = "<html><head></head><body style='font-family: arial, sans-serif; font-size: 13px'><p align='justify'>Dear Parent,</p>";
			$body .= "<p align='justify'>Thanks for contacting ".$Comp['SchoolName'].". </p>";
			$body .= "<p align='justify'>We acknowledge that we have received application for your child <b>$Candidate</b></p>
			<p align='justify'>The application no is <b>$SysGenNo</b>. Please produce the mentioned application no. whenever asked by the school authorities at the time of verification & registration.</p>
			<p align='justify'>You are requested to please print the form as given in the link below and bring the physical copy of the form to school along with the documents mentioned in the form for verification.</p>";
			$body .= "<p align='justify'><a href='http://10.0.16.23/test/mef/portal/PrintForm.php?cid=$cid&RegNo=$SysGenNo&No=".md5($security)."' style='padding: 10px; border: 1px solid #8800ff;background-color: #4961e1; color: #ffffff;'>Print Form</a>";
			$body .= "<p align='justify'>Selected candidate will be informed by mail / phone (provided by you for communication with school)
			of the date of visit to school for physical submission of form shortly.</p>
			<p align='justify'>Warm regards. <br /><br />".$Comp['SchoolName']."</p>
			<p align='justify'>This is a system generated mail. Please do not respond to it.</p>
			</body></html>";
			//$mail->AddReplyTo("erpadministrator@mempl.com", "MEM ERP");
	                //$mail->AddAttachment($MOUFiile);                   // add attachments
			//$mail->AddAttachment($LOIFile);                    // optional name
			$mail->IsHTML(true);                                 // set email format to HTML
	
			$mail->WordWrap = 50;                                // set word wrap to 50 characters
			$mail->Subject = $subject;
			$mail->Body    = $body;
			$mail->AltBody = $body;
			$mail->Body;
				
			if(!$mail->Send())
			{
			   echo "<p>Message could not be sent.";
			   echo "Mailer Error: " . $mail->ErrorInfo."</p>";
			}
			else{
               ?>
				<div class="alert alert-info">
				<strong>Info!</strong> Message has been sent.
				</div>
				
				<?php 		
			}
				
				?>
				<!-------------mail code End------------->
				<!--meta http-equiv='refresh' content="0;URL='MeetingList.php'"-->
			<?php }*/		
		
	   // require 'footer.php';
	?>
