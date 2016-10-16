<?php require_once("datab.php");

 ?>
<!--?php require_once("db.txt"); ?-->
   
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="" />
<meta name="author" content="" />

<title>Meeting Information Form</title>

<link href='http://fonts.googleapis.com/css?family=Poiret+One|Oxygen|Josefin+Sans:400,400italic,300italic,300,600' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bs/css/bootstrap.min.css">

<!-- jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bs/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bs/css/jquery-ui.css">
 
<script type="text/javascript" charset="utf-8">
   
function validateEmail(){
    
    var emailID = document.getElementById('Email');
    alert(emailID);
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID");
            document.myForm.Email.focus() ;
            return false;
         }
         return( true );
}

</script>
<!-------------------------------------------------------------->
 <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://rawgit.com/dbrekalo/attire/master/dist/css/build.min.css">
<script src="https://rawgit.com/dbrekalo/attire/master/dist/js/build.min.js"></script>

        <link rel="stylesheet" href="dist/fastselect.min.css">
        <script src="dist/fastselect.standalone.js"></script>

        <style>

            .fstElement { font-size: 0.60em; }
            .fstToggleBtn { min-width: 16.5em; }

            .submitBtn { display: none; }

            .fstMultipleMode { display: block; }
            .fstMultipleMode .fstControls { width: 100%; }


        </style>

    </head>
<body>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69265879-1', 'auto');
      ga('send', 'pageview');

</script>
<!-------------------------------------------------------------->
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
    <form name="myForm" method="Post" action="MeetingAdd.php" onsubmit="return(validateForm());" onkeypress="return event.keyCode != 13;" style="background-color: #ffffff;">

<table width="100%" align="center" border="0px" cellspacing="0px" cellpadding="5px"  class="table table-responsive borderless"  style="font-family: 'Oxygen', Arial; font-size: 18px;">
    <tr>
        <td height="100px" colspan="6" align='center' style="border-top: 0px;">
           
                <p style="color: #008B8B ;font-family: 'Poiret One', 'arial'; font-size: 24px; text-transform: uppercase; font-weight: bold;">Meeting Schedule</p>
               
        </td>
    </tr>

  <tr>
         <td>Organizer<sup style="color: #990000; font-weight: bold">*</sup></td>
         <td colspan="3"><input type="text" name="Organizer" class="form-control " /></td>
        <td></td>
	<td></td>   
 </tr>

     <tr>



       
        <td>Attendees<sup style="color: #990000; font-weight: bold">*</sup></td>
         <td colspan="3" >
         <select class="multipleSelect" multiple name="Attendees">
        <?php 
              $r="SELECT * FROM employee ORDER BY EmployeeName";
              $result =  mysqli_query($conn, $r);
             
              while ($row = mysqli_fetch_array($result)) {
              echo "<option value='".$row['EmployeeEmail']."','".$row['EmployeeName']."'>" . $row['EmployeeName'] . "</option>"; 
		
              }
          ?>
	</select>
         <button class="submitBtn" type="submit">Submit</button>
         <script>

                $('.multipleSelect').fastselect();

            </script>

          </td>
       
         <td></td>
	<td></td>
    </tr>
    <tr>
       
        <td>Subject<sup style="color: #990000; font-weight: bold">*</sup></td>
        <td colspan="3"><input type="text" name="Subject" class="form-control" /></td>
        <td></td>
	<td></td>
    </tr>
    <tr>
         <td>Location<sup style="color: #990000; font-weight: bold">*</sup></td>
        <td colspan="3"><input type="text" name="Location" class="form-control" /></td>
	<td></td>
	<td></td>
    </tr>
	<tr> 
	<td>Date<sup style="color: #990000; font-weight: bold">*</sup></td>
        <td colspan="3"><input type="text" id="datepicker" name="meetingdate" class="form-control" /></td>
        <td></td>
	<td></td>
	</tr>
   <tr>
       
        <td>Start Time<sup style="color: #990000; font-weight: bold">*</sup></td>
        <td colspan="3"><input type="text" id="datepicker" name="StartTime" class="form-control" /></td>
        <td>End Time<sup style="color: #990000; font-weight: bold">*</sup></td>
        <td><input type="text" name="EndTime" class="form-control"/></td>
   </tr> 
    
  
   
    
    <tr><td>Agenda</td>
       <td colspan="3"><textarea class="form-control" name="Agenda" width="500px">Agenda</textarea></td></tr>
   
            </table>
      
	<p align="justify">
		
		<input type="submit" class='btn btn-primary' id='Review' value='Submit'>
	</p>
    </form>
</div>


</body>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });

  var selectedList = [];
   $(".fstChoiceItem").each(function()
  { selectedList.push( {"name" : $(this).data("text"), "value" : $(this).data("value")});})

  });
  </script>
</html>
