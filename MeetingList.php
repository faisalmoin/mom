<?php require_once("datab.php"); ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="" />
<meta name="author" content="" />

<title>Meeting Details</title>

<link href='http://fonts.googleapis.com/css?family=Poiret+One|Oxygen|Josefin+Sans:400,400italic,300italic,300,600' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bs/css/bootstrap.min.css">

<!-- jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bs/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bs/css/jquery-ui.css">
	
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>


</head>

<body>
    <nav class="navbar-fixed-top" >
		<!-- <nav role="navigation" class="navbar navbar-inverse navbar-static-top"> -->
		<nav role="navigation" style="background-color: #7FFFD4" class="navbar navbar-default navbar-static-top"></nav>
	</nav>
    <br /><br /><br />
     <!--p style="font-family: 'Poiret One', 'arial'; background-color: #a3e4d7; font-size: 24px; text-transform: uppercase;"></p-->
<div class="container">
    <!--<form name="myForm" method="post" action="registration.php" onsubmit="return(validateForm())" onkeypress="return event.keyCode != 13;"> -->
   
    <form name="myForm" method="Post" action="MeetingListUpdate.php" onsubmit="return(validateForm());" onkeypress="return event.keyCode != 13;" style="background-color: #ffffff;">

<table width="100%" align="center" border="0px" cellspacing="0px" cellpadding="5px"  class="table table-responsive borderless"  style="font-family: 'Oxygen', Arial; font-size: 18px;">
    <tr>
        <td height="100px" colspan="6" align='center' style="border-top: 0px;">
           
                <p style="color: #008B8B ;font-family: 'Poiret One', 'arial'; font-size: 24px; text-transform: uppercase; font-weight: bold;">Meeting Schedule Details</p>
               
        </td>
    </tr>

    <tr>
        <th>MeetingID</th>
        <th>Organizer</th>
        <th>Subject</th>
        <th>Location</th>
        <th>Meeting Date</th>
        
       
    </tr>
     <?php
        $i=1;
        $Curr = mysqli_query($conn, "select * from meetingid") or exit(odbc_errormsg($conn));
      while ($row = mysqli_fetch_array($Curr))  {
    
	?>

    <tr><td><a href="ActionDetails.php?SectionID=<?php echo $row['MeetingID']?>"><?php echo $row['MeetingID']?></a></td>
        <td><?php echo $row['Organizer']?></td>
        <td><?php echo $row['Subject']?></td>
        <td><?php echo $row['Location']?></td>
        <td><?php echo $row['Meetingdate']?></td>
      
    </tr>
    <?php
     
    $i++;
        }
     ?>
   
            </table>
      
	
    </form>
    
</div>


</body>
</html>
