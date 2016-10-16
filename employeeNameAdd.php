<?php
     
   require_once("datab.php");
     
        $empname = strtoupper(trim($_REQUEST['empname']));
        $empcode= addslashes(strtoupper(trim($_REQUEST['empcode'])));
        $contact = (strtoupper(trim($_REQUEST['contact'])));
        $email = addslashes($_REQUEST['email']);
        $department = addslashes(strtoupper(trim($_REQUEST['department'])));
        $comp = addslashes($_REQUEST['company']);
        $password=md5("password");
        //$date=date();
       // $lmodified=mktime('0',$date);

      echo  $slct="select * from employee WHERE EmployeeCode='".$empcode."' OR EmployeeEmail='".$email."' ";
      $res=mysqli_query($conn,$slct);
      $rowsl=mysqli_fetch_array($res);
     echo $num=mysqli_num_rows($res);
    if($empname!="" && $empcode!="" && $email!="" && $num<1)
{

      echo $SQL ="INSERT INTO employee(EmployeeCode,EmployeeName,EmployeeContact,EmployeeEmail,EmployeeDepartment,EmployeeStatus,EmployeePassword,EmployeeCompany)
		 VALUES('$empcode','$empname','$contact','$email','$department','1','$password','$comp')"; 
    mysqli_query($conn, $SQL);
         
    
   }
  // Header('location:listEmployeeName.php');
       ?> 
       
