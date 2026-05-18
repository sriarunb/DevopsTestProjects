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
                            Customer  Details <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="customer_details_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
     <th width="45">SI NO </th>
     <th width="103">Customer Name </th>
     <th width="116">Customer Address </th>
     <th width="91">Customer City </th>
     <th width="104">Contact Number </th>
     <th width="56">Email ID </th>
     <th width="37">Image</th>
     <th width="43">Weight</th>
     <th width="87">Health Details </th>
     <th width="84">Date Of Birth </th>
     <th width="45">Gender</th>
     <th width="39">Height</th>
     <th width="24">Edit</th>
     <th width="66">Delete</th>
   </tr>
    </thead>
  <tbody>
    <?php 
  $sl=1;
  include('db_connect.php');
  $sql="select * from customer_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['customer_name'];?></td>
	 <td><?php echo $row['customer_address'];?></td>
	  <td><?php echo $row['customer_city'];?></td>
	 <td><?php echo $row['contact_number'];?></td>
	  <td><?php echo $row['email_id'];?></td>
	 <td><img src="../photo/<?php echo $row['image'];?>" width="100" height="100"></td>
	  <td><?php echo $row['weight'];?></td>
	 <td><?php echo $row['health_details'];?></td>
	  <td><?php echo $row['date_of_birth'];?></td>
	 <td><?php echo $row['gender'];?></td>
	  <td><?php echo $row['height'];?></td>
	 
    <td><a href="customer_details_edit.php?customer_id=<?php echo $row['customer_id'];?>"><img src="assets/img/edit icon.png" width="35px" height="35px"></a></td>
	<td><a href="customer_details_delete.php?customer_id=<?php echo $row['customer_id'];?>"><img src="assets/img/delete icon.png" width="35px" height="35px"></a></td>
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


