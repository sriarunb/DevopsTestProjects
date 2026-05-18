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
                            Gym Items <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="gym_items_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>


    <th>SI NO </th>
    <th>Gym Item Name </th>
    <th>Gym Item Discription </th>
    <th>Gym Item Quantity </th>
    <th>Gym Item Photo </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <?php 
  $sl=1;
  include('db_connect.php');
  $sql="select * from gym_items";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['gym_item_name'];?></td>
	<td><?php echo $row['gym_item_discription'];?></td>
	<td><?php echo $row['gym_item_quantity'];?></td>
	<td><img src="../photo/img/<?php echo $row['gym_item_photo'];?>" width="100" height="100"></td>
	
	
    <td><a href="gym_items_edit.php?gym_id=<?php echo $row['gym_id'];?>"><img src="assets/img/edit icon.png" width="35px" height="35px"></a></td>
   <td><a href="gym_items_delete.php?gym_id=<?php echo $row['gym_id'];?>"><img src="assets/img/delete icon.png" width="35px" height="35px"></a></td>
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

