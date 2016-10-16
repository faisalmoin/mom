<?php

$id=$_REQUEST['ID'];
require_once("Header.php");
$SQL ="select * from employee WHERE ID='".$id."'"; 
       $res=mysqli_query($conn, $SQL);
    

?>


<form action="EmployeeUpdate.php?ID=<?php echo $id;?>" id="Form" method="post" class="form-horizontal">
   <div class="container">	
   
	<div class='col-sm-12 col-md-12'>
            
                    <div class="col-md-9">
                                <div id="messages"></div>
                     </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-md-6"><h1 class="text-primary">Update User</h1></div>
                        <?php if(isset($_REQUEST['message'])){
                            $msg=$_REQUEST['message'];
                            if($msg==success)
                            {?>
                                <div class="col-sm-6 col-md-6 text-success" >
                                    <h4> <strong>Success!</strong>New Item  has been added successfully.</h4>
                                </div>
                          <?php }
                        
                          if($msg==fail)
                            {?>
                                <div class="col-sm-6 col-md-6 text-danger" >
                                    <h4> <strong>Fail!  </strong>New Item  Not added.<br/>Fill unique values of Item.</h4>
                                </div>
                          <?php }
                            }?>
                        </div>
                    
                   
                    <div class="form-group">
                        <?php  while($row=mysqli_fetch_array($res))
     {?>
      
   
                            
                            <div class="col-sm-3 col-md-3">Code</div>
                            <div class="col-sm-3 col-md-3"><input type="text" id="empcode" name="empcode" class="form-control" autocomplete="off" value="<?php echo $row['EmployeeCode'];?>" /></div>
                            <div class="col-sm-3 col-md-3">&nbsp;</div>
                            <div class="col-sm-3 col-md-3">&nbsp;</div>
                            
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 col-md-3">Employ Name</div>
                            <div class="col-sm-3 col-md-3"><input type="text" name="empname" class="form-control" autocomplete="off" value="<?php echo $row['EmployeeName'];?>"/></div>
                            
                            
                        </div>
                         <div class="form-group">
                            <div class="col-sm-3 col-md-3">Contact No</div>
                            <div class="col-sm-3 col-md-3"><input type="text" id="contact" name="contact" class="form-control" autocomplete="off" value="<?php echo $row['EmployeeContact'];?>"/></div>
                            </div>
                           <div class="form-group">
                            <div class="col-sm-3 col-md-3">Department</div>
                            <div class="col-sm-3 col-md-3"><input type="text" name="department" id="department" class="form-control" autocomplete="off" value="<?php echo $row['EmployeeDepartment'];?>"/></div>
                             </div>
                                             
                           <div class="form-group">
                              <div class="col-sm-3 col-md-3">Email</div>
                              <div class="col-sm-3 col-md-3"><input type="text" name="email" class="form-control" autocomplete="off" value="<?php echo $row['EmployeeEmail'];?>"/></div>
                           </div>
                           <?php }?>
                          
           <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
            <input type="submit" name="item" id="item" value="Submit" class="btn btn-primary">
        </div>
    </div>
            
                   
                    </div>
        </div>
</form>
