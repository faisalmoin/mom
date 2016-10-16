<?php
     
   require_once("datab.php");
     
        $empname = strtoupper(trim($_REQUEST['empname']));
        $empcode= addslashes(strtoupper(trim($_REQUEST['empcode'])));
        $contact = (strtoupper(trim($_REQUEST['contact'])));
        $email = addslashes($_REQUEST['email']);
        $department = addslashes(strtoupper(trim($_REQUEST['department'])));
       
      echo $query = "UPDATE `employee` 
              SET    `EmployeeCode` = '$empcode',
                     `EmployeeName` = '$empname',
                     `EmployeeContact` = '$contact',
                     `EmployeeEmail` = '$email',
                     `EmployeeDepartment` = '$department'
              WHERE  `ID`='".$_REQUEST['ID']."'";
    mysqli_query($conn, $query);
         
      //Header(location:'addEmployeename.php');
       ?> 
       
