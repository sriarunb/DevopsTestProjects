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
                            Feedback <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="feedback_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                       
  <tr>
    <th><div align="center">SI NO </div></th>
    <th><div align="center">Customer Name </div></th>
    <th><div align="center">Feedback title </div></th>
    <th><div align="center">Feedback description </div></th>
    <th><div align="center">Feedback date </div></th>
    <th><div align="center">Delete</div></th>
  </tr>
    <?php 
  $sl=1;
  include('db_connect.php');
  $uname=$_SESSION['uname'];
  $sql="select * from feedback fb,customer_details cd where cd.customer_id=fb.customer_id and cd.email_id='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['customer_name'];?></td>
	 <td><?php echo $row['feedback_title'];?></td>
	  <td><?php echo $row['feedback_description'];?></td>
	   <td><?php echo $row['feedback_date'];?></td>
        <td><a href="feedback_delete.php?feedback_id=<?php echo $row['feedback_id'];?>"><img src="assets/img/delete icon.png" width="35px" height="35px"></a></td>
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
