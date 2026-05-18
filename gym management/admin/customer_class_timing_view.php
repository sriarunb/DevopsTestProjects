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
                                <form name="form1" method="post" action="customer_class_timing_view_next.php">
                                  <strong>Select Class Timing :                                  </strong>
                                  <select name="class_timing_id" id="class_timing_id" class="validate[required]">
                                    <option value="">Select Class Timing </option>
                                    <?php
			 include('db_connect.php');
			 $sql1="select * from class_timing";
			 $res1=mysqli_query($conn,$sql1);
			 while($row1=mysqli_fetch_array($res1))
			 {
			 ?>
                                    <option value="<?php echo $row1['class_time_id'];?>"> <?php echo $row1['class_time'];?> </option>
                                    <?php
			 }
			 ?>
                                  </select>
                                                                <input name="SEARCH" class="btn btn-primary" type="submit" id="SEARCH" value="SEARCH">
                                </form>
                                <table align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th><div align="center">SI NO </div></th>
	  <th><div align="center">Customer Photo </div></th>
    <th><div align="center">Customer Name </div></th>
    <th><div align="center">Class Timing</div></th>
    <th><div align="center">Edit</div></th>
    <th><div align="center">Delete</div></th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $sl=1;
 $tot_cust=0;
  $sql="select * from customer_class_timing cct,customer_details cd,class_timing ct where cct.customer_id=cd.customer_id and cct.class_timing_id=ct.class_time_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
   $tot_cust=$tot_cust+1;
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
	 <td><img src="../photo/<?php echo $row['image'];?>" width="100" height="100"></td>
    <td><a href="customer_details_edit.php?customer_id=<?php echo $row['customer_id'];?>"><?php echo $row['customer_name'];?></a></td><td><?php echo $row['class_time'];?></td>
    <td><a href="customer_class_timing_edit.php?customer_class_timing_id=<?php echo $row['customer_class_timing_id'];?>"><img src="assets/img/edit icon.png" width="35px" height="35px"></a></td>
	<td><a href="customer_class_timing_delete.php?customer_class_timing_id=<?php echo $row['customer_class_timing_id'];?>"><img src="assets/img/delete icon.png" width="35px" height="35px"></a></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
   <tr>
    <th><div align="center">Total Customers </div></th>
	  <th colspan="5"><div align="left"><?php echo $tot_cust;?>&nbsp;</div></th>
	  </tr>
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

