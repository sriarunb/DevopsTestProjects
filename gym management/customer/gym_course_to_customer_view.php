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
                            
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
				
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

    <th width="70"><div align="center">SI NO </div></th>
    <th width="107"><div align="center">Customer Photo </div></th>
    <th width="107"><div align="center">Customer Name </div></th>
    <th width="70"><div align="center">Course Name </div></th>
   
  
  </tr>
  <?php 
  $sl=1;
   include('db_connect.php');
$uname=$_SESSION['uname'];
  $sql="select * from gym_course_to_customer gctc,customer_details cd, gym_courses gc where gctc.gym_course_id=gc.gym_course_id and gctc.customer_id=cd.customer_id and cd.email_id='$uname'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><img src="../photo/<?php echo $row['image'];?>" width="100" height="100"></td>
    <td><a href="customer_details_edit.php?customer_id=<?php echo $row['customer_id'];?>"><?php echo $row['customer_name'];?></a></td>
	<td><?php echo $row['gym_course_name'];?></td>
	
   
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

