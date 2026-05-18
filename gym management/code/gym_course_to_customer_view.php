<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Gym Course To Customer <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="gym_course_to_customer_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>


<body>
 Gym Course To Customer
<table width="475" height="92" border="1" align="center">
  <tr>
    <th width="70"><div align="center">SI NO </div></th>
    <th width="107"><div align="center">Customer ID </div></th>
    <th width="70"><div align="center">Start Date </div></th>
    <th width="68"><div align="center">End Date </div></th>
    <th width="63"><div align="center">Edit</div></th>
    <th width="73"><div align="center">Delete</div></th>
  </tr>
  <?php 
  $sl=1;
  include('db_connect.php');
  $sql="select * from gym_course_to_customer gctc,customer_details cd where gctc.customer_id=cd.customer_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['customer_name'];?></td>
	<td><?php echo $row['start_date'];?></td>
	<td><?php echo $row['end_date'];?></td>
	
   <td><a href="gym_course_to_customer_edit.php?gym_course_to_customer_id=<?php echo $row['gym_course_to_customer_id'];?>">Edit</a></td> 
   <td><a href="gym_course_to_customer_delete.php?gym_course_to_customer_id=<?php echo $row['gym_course_to_customer_id'];?>">Delete</a></td>
  </tr>
  <?php
  }
  ?>
   
 </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              
                <!-- /. ROW  -->
     
        
                    <!-- End  Hover Rows  -->
               
                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
             <?php include('footer.php');?>   

</body>
</html>

