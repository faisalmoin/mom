<?php
require_once("SessionHandler.php");
$hostname = "localhost"; 
$username = "root";
$password = "root";
$db="meeting";

$conn = mysqli_connect($hostname, $username, $password,$db);
	
	//Client Browser Detection
	$firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
	$chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;
	
	//exit("Chrome: ".$chrome." // Firefox: ".$firefox);
	
	if ($firefox=="" && $chrome=="") {
		header('Location: ../BrowserCheck.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Educomp School Portal</title>
    
	
	  <link rel="stylesheet" href="bs/css/jquery-ui.css">
  <script src="bs/js/jquery-1.10.2.js"></script>
  <script src="bs/js/jquery-ui.js"></script>
 
<link rel="stylesheet" href="bs/css/bootstrap.min.css">

<!-- jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bs/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bs/css/jquery-ui.css">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script>
$(document).ready(function() {
    $('#Form').bootstrapValidator({
        err: {
            container: function($field, validator) {
               
                return $field.parent().next('.messageContainer');
            }
        },
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
           
          
            empname: {
                validators: {
                    notEmpty: {
                        message: 'Employee Name is required'
                    }
                    
                }
            },
           
             department: {
                validators: {
                    notEmpty: {
                        message: 'Department is required'
                    }
                }
            },
            company: {
                validators: {
                    notEmpty: {
                        message: 'Company Group is required'
                    }
                }
            },
           
            email: {
               required: true,
               email: true
            },
           email: {
                validators: {
                    notEmpty: {
                        message: 'email is required'
                    }
                }
            },
            
        }
    });


   $("#contact").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });



  	$('#category').change(function()
	{
           var textinput = $('#category').val();
              
            var dataString = 'id='+ textinput;	
		 
                $.ajax
                ({
                    type: "POST",
                    url: "get_category.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                       
                        $("#subcategory").html(html);
                    }
                });
            });
       
             




 
    $(function()
    {
        var availableTags = [ <?php
                $dept="SELECT DISTINCT(EmployeeDepartment) FROM employee ";
               $row=mysqli_query($conn, $dept);
               while ($rowdept = mysqli_fetch_array($row)) {

                    echo "'". $rowdept['EmployeeDepartment']."', ";
                }
               
                          
            ?> ];

       
        $( "#department").autocomplete({
            source: availableTags
        });
    });

  });
  
</script>
	<style type="text/css">
		

		.btn, .form-control, input, select, navbar{
			border-radius: 0px;
		}
		#btn-create{
			position: fixed;
			bottom: 10px;
			right: 10px;
			z-index: 999999;
		}
	
		.navbar-default {
			background-color: #ff6666;
			border-color: #76D7C4; }
		.navbar-default .navbar-brand {
			color: #ecf0f1; }
		.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
		color: #ffe6d1; }
		.navbar-default .navbar-nav > li > a {
		color: #ecf0f1; }
		.navbar-default .navbar-nav > li > a:hover,
		.navbar-default .navbar-nav > li > a:focus {
		color: #ffe6d1; }
		.navbar-default .navbar-nav .active > a,
		.navbar-default .navbar-nav .active > a:hover,
		.navbar-default .navbar-nav .active > a:focus {
		color: #ffe6d1;
		background-color: #76D7C4; }
		.navbar-default .navbar-nav .open > a, .navbar-default .navbar-nav .open > a:hover,
		.navbar-default .navbar-nav .open > a:focus {
		color: #ffe6d1;
		background-color: #76D7C4; }
		.navbar-default .navbar-nav .open > a .caret,
		.navbar-default .navbar-nav .open > a:hover .caret,
		.navbar-default .navbar-nav .open > a:focus .caret {
		border-top-color: #ffe6d1;
		border-bottom-color: #ffe6d1; }
		.navbar-default .navbar-nav > .dropdown > a .caret {
		border-top-color: #ecf0f1;
		border-bottom-color: #ecf0f1; }
		.navbar-default .navbar-nav > .dropdown > a:hover .caret,
		.navbar-default .navbar-nav > .dropdown > a:focus .caret {
		border-top-color: #ffe6d1;
		border-bottom-color: #ffe6d1; }
		.navbar-default .navbar-toggle {
		border-color: #76D7C4; }
		.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
		background-color: #76D7C4; }
		.navbar-default .navbar-toggle .icon-bar {
		background-color: #ecf0f1; }

		@media (max-width: 767px) {
		.navbar-default .navbar-nav .open .dropdown-menu > li > a {
		color: #ecf0f1;   }
		.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
		.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
		color: #ffe6d1;
		background-color: #76D7C4;   }
		}

		html {
		padding-top: 30px; }

		a.solink {
		position: fixed;
		top: 0;
		width: 100%;
		text-align: center;
		background: #f3f5f6;
		color: #cfd6d9;
		border: 1px solid #cfd6d9;
		line-height: 30px;
		text-decoration: none;
		transition: all 0.3s;
		z-index: 999; }

		a.solink::first-letter {
		text-transform: capitalize; }

		a.solink:hover {
		color: #428bca; }

		</style>	
	</head>
	
	<body>
	
	<!-- Fixed navbar -->
	<nav class="navbar-fixed-top" style="background-color: #fff;">
		<!-- <nav role="navigation" class="navbar navbar-inverse navbar-static-top"> -->
		<nav role="navigation" class="navbar navbar-light" style="background-color: #e3f2fd;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color: #008B8B;"><?php   ?></a>
			</div>
			<!-- Collection of nav links, forms, and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
                                    <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					
				</ul>
				<form role="search" class="navbar-form navbar-left" action="Search.php" method="GET">
					<div class="input-group">
						<input type="text" placeholder="Search" class="form-control" name="AdmNo" required />
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</form>				
				<ul class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Setup</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Invitees <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="addEmployeeName.php">Invitees</a></li>
							<li><a href="listEmployeeName.php">Invitees List</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print_r($_SESSION['user']); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">My Account</a></li>
							<li><a href="ChangePassword.php">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			</div>
		</nav>
	</nav>
	<br /><br />
