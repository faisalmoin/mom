<?php
require_once("Header.php");
$SQL ="select * from employee"; 
       $res=mysqli_query($conn, $SQL);
       print_r($_SESSION['user']);

?>


<form action="" id="Form" method="post" class="form-horizontal">
   <div class="container">	
   
	<div class='col-sm-12 col-md-12'>
            <div class="col-sm-6 col-md-6"><h1 class="text-primary">User List</h1></div>
                    <div class="col-md-9">
                                <div id="messages"></div>
                     </div>
                    <div class="form-group">
                        <table>
                        <tr>
                            <th class="col-sm-4 col-md-1">Sr</th>
                            <th class="col-sm-4 col-md-2">Employee Code</th>
                            <th class="col-sm-4 col-md-2">Employee Name</th>
                            <th class="col-sm-4 col-md-2">Employee Contact</th>
                            
                            <th class="col-sm-4 col-md-2">Employee Email</th>
                            <th class="col-sm-4 col-md-2">Department</th>
                            <th class="col-sm-4 col-md-2">Edit</th>
                        </tr>
                       <?php $i=1;while($row=mysqli_fetch_array($res)){?>
                        <tbody id='table'>
                        <tr>
                            <td class="col-sm-4 col-md-1"><?php echo $i; ?></td>
                            <td class="col-sm-4 col-md-2"><?php echo $row['EmployeeCode']; ?></td>
                            <td class="col-sm-4 col-md-2"><?php echo $row['EmployeeName']; ?></td>
                            <td class="col-sm-4 col-md-2"><?php echo $row['EmployeeContact']; ?></td>
                            <td class="col-sm-4 col-md-2"><?php echo $row['EmployeeEmail'];?></td>
                            <td class="col-sm-4 col-md-2"><?php echo $row['EmployeeDepartment']; ?></td>
                         <td class="col-sm-4 col-md-2"><a href="EmployeeEdit.php?ID=<?php echo $row['ID'];?>">Edit</a></td>
                                                                        
                        </tr>
                       <?php $i++;}?>
                        </tbody>
                    </table>
            
                   
                    </div>
        </div>
</form>
