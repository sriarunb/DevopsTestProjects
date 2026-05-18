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
							<form name="form1" method="post" action="gym_course_to_customer_view_next.php">
                                  <strong>Select Course :                                  </strong>
                                  <select name="gym_course_id" id="gym_course_id" class="validate[required]">
                                    <option value="">Select Course </option>
                                    <?php
			 include('db_connect.php');
			 $sql1="select * from gym_courses";
			 $res1=mysqli_query($conn,$sql1);
			 while($row1=mysqli_fetch_array($res1))
			 {
			 ?>
                                    <option value="<?php echo $row1['gym_course_id'];?>"> <?php echo $row1['gym_course_name'];?> </option>
                                    <?php
			 }
			 ?>
                                  </select>
                                                                <input name="SEARCH" class="btn btn-primary" type="submit" id="SEARCH" value="SEARCH">
                              </form>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

    <th width="70"><div align="center">SI NO </div></th>
    <th width="107"><div align="center">Customer Photo </div></th>
    <th width="107"><div align="center">Customer Name </div></th>
    <th width="70"><div align="center">Course Name </div></th>
   
    <th width="73"><div align="center">Delete</div></th>
  </tr>
  <?php 
  $sl=1;
  $tot_cust=0;
$gym_course_id=$_POST['gym_course_id'];
  $sql="select * from gym_course_to_customer gctc,customer_details cd, gym_courses gc where gctc.gym_course_id=gc.gym_course_id and gctc.customer_id=cd.customer_id and gc.gym_course_id='$gym_course_id'";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  $tot_cust=$tot_cust+1;
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><img src="../photo/<?php echo $row['image'];?>" width="100" height="100"></td>
    <td><a href="customer_details_edit.php?customer_id=<?php echo $row['customer_id'];?>"><?php echo $row['customer_name'];?></a></td>
	<td><?php echo $row['gym_course_name'];?></td>
	
   <td><a href="gym_course_to_customer_delete.php?gym_course_to_customer_id=<?php echo $row['gym_course_to_customer_id'];?>"><img src="assets/img/delete icon.png" width="35px" height="35px"></a></td>
  </tr>
  <?php
  }
  ?>
   
 </tbody>
 
   <tr>

    <th><div align="center">Total Customers : </div></th>
    <th><?php echo $tot_cust;?>&nbsp;</th>
    <th colspan="3">&nbsp;</th>
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

