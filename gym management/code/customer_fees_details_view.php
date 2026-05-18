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
                            Customer Fees Details <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="customer_fees_details_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<body>
Customer Fees Details
<table width="475" height="92" border="1" align="center">
  <tr>
    <th width="57"><div align="center">SI NO </div></th>
    <th width="97"><div align="center">Customer ID</div></th>
    <th width="104"><div align="center">Fees Amount </div></th>
    <th width="81"><div align="center">Fees Date </div></th>
    <th width="39"><div align="center">Edit</div></th>
    <th width="57"><div align="center">Delete</div></th>
  </tr>
   <?php 
  $sl=1;
  include('db_connect.php');
  $sql="select * from customer_fees_details cfd,customer_details cd where cfd.customer_id=cd.customer_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['customer_name'];?></td>
	 <td><?php echo $row['fees_amount'];?></td>
	  <td><?php echo $row['fees_date'];?></td>
	  <td><a href="customer_fees_details_edit.php?customer_fees_id=<?php echo $row['customer_fees_id'];?>">Edit</a></td>
	 <td><a href="customer_fees_details_delete.php?customer_fees_id=<?php echo $row['customer_fees_id'];?>">Delete</a></td>
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




