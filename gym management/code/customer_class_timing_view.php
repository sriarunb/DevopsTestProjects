<!DOCTYPE html>
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
                            Customer Class Timing Details <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="customer_class_timing_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th width="58"><div align="center">SI NO </div></th>
    <th width="81"><div align="center">customer ID </div></th>
    <th width="104"><div align="center">class timing ID </div></th>
    <th width="42"><div align="center">Edit</div></th>
    <th width="58"><div align="center">Delete</div></th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $sl=1;
  include('db_connect.php');
  $sql="select * from customer_class_timing cct,customer_details cd,class_timing ct where cct.customer_id=cd.customer_id and cct.class_timing_id=ct.class_time_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['customer_name'];?></td>
	<td><?php echo $row['class_time'];?></td>
    <td><a href="customer_class_timing_edit.php?customer_class_timing_id=<?php echo $row['customer_class_timing_id'];?>">Edit</a></td>
	<td><a href="customer_class_timing_delete.php?customer_class_timing_id=<?php echo $row['customer_class_timing_id'];?>">Delete</a></td>
    
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

