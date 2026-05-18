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
                        <div class="panel-heading"></div>
                        <div class="panel-body"><div class="table-responsive">
                          <table align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th><div align="center">SI NO </div></th>
	  <th><div align="center">Customer Photo </div></th>
    <th><div align="center">Customer Name </div></th>
    <th><div align="center">Class Timing</div></th>
    
  </tr>
  </thead>
  <tbody>
  <?php 
  $sl=1;
     include('db_connect.php');
 $tot_cust=0;
 $uname=$_SESSION['uname'];
  $sql="select * from customer_class_timing cct,customer_details cd,class_timing ct where cct.customer_id=cd.customer_id and cct.class_timing_id=ct.class_time_id and cd.email_id='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
   $tot_cust=$tot_cust+1;
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
	 <td><img src="../photo/<?php echo $row['image'];?>" width="100" height="100"></td>
    <td><a href="customer_details_edit.php?customer_id=<?php echo $row['customer_id'];?>"><?php echo $row['customer_name'];?></a></td><td><?php echo $row['class_time'];?></td>
   
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

