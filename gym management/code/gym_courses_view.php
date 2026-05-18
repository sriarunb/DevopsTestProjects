
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
                            Gym Courses<!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="gym_courses_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										<body>
Gym Course
<table width="775" height="83" border="1" align="center">
  <tr>
    <th>SI NO </td>
    <th>Gym course name </th>
    <th>Course Description </th>
    <th>Course fees </th>
    <th>Course Duration </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
   <?php 
  $sl=1;
  include('db_connect.php');
  $sql="select * from gym_courses";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['gym_course_name'];?></td>
	 <td><?php echo $row['course_description'];?></td>
	  <td><?php echo $row['course_fees'];?></td>
	   <td><?php echo $row['course_duration'];?></td>
	    
   <td><a href="gym_courses_edit.php?gym_course_id=<?php echo $row['gym_course_id'];?>">Edit</a></td>
   <td><a href="gym_courses_delete.php?gym_course_id=<?php echo $row['gym_course_id'];?>">Delete</a></td>
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

