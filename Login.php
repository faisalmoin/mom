<?php  
        session_start();
        $hostname = "localhost"; 
		$username = "root";
		$password = "root";
		$db="meeting";

		$conn = mysqli_connect($hostname, $username, $password,$db);
      if(isset($_POST['submit']))
      {
	 $user=strtoupper(trim($_REQUEST['Username']));
	 $pwd=md5($_REQUEST['Password']);
     	echo $qry="select * from employee where EmployeeName='".$user."' and EmployeePassword='".$pwd."' ";
		$res=mysqli_query($conn,$qry);
		$row=mysqli_fetch_array($res);
	    $num=mysqli_num_rows($res);
		if($num>0)
		{
			
	        $_SESSION['user']=$row['EmployeeName'];
            $_SESSION['empcode']=$row['EmployeeCode'];	
            $_SESSION['pwd']=$row['EmployeePassword'];	
            $_SESSION['cmp']=$row['EmployeeCompany'];	 
            
		header('Location: listEmployeeName.php');

		}

	else{
		
		header('Location: index.php');
	}
	
	
}
?>

