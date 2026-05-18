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
                            Trainer  Details <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <a href="trainer_details_form.php" class="btn btn-info">ADD NEW</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

<body>
Trainer Details
<table width="964" border="0" align="center">
  <tr>
    <td width="61"><div align="center">SI NO </div></td>
    
    <th width="90"><div align="center">Trainer Name </div></th>
    <th width="107"><div align="center">Trainer Address</div></th>
    <th width="89"><div align="center">Contact Number </div></th>
    <th width="37"><div align="center">Email ID </div></th>
    <th width="67"><div align="center">Experience</div></th>
    <th width="90"><div align="center">Date Of Birth </div></th>
    <th width="77"><div align="center">Achievments</div></th>
    <th width="51"><div align="center">photo</div></th>
    <th width="47"><div align="center">Edit </div></th>
    <th width="90"><div align="center">Delete</div></th>
  </tr>
  <?php 
  $sl=1;
  include('db_connect.php');
  $sql="select * from trainer_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['trainer_name'];?></td>
	<td><?php echo $row['trainer_address'];?></td>
	<td><?php echo $row['contact_number'];?></td>
	<td><?php echo $row['email_id'];?></td>
	<td><?php echo $row['experience'];?></td>
	<td><?php echo $row['date_of_birth'];?></td>
	<td><?php echo $row['achievments'];?></td>
	<td><img src="../photo/img/<?php echo $row['photo'];?>" width="75px" height="75px"></td>
  <td><a href="trainer_details_edit.php?trainer_id=<?php echo $row['trainer_id'];?>"><img src="assets/img/edit icon.png" width="35px" height="35px"></a></td>
	<td><a href="trainer_details_delete.php?trainer_id=<?php echo $row['trainer_id'];?>"><img src="assets/img/delete icon.png" width="35px" height="35px"></a></td>
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


