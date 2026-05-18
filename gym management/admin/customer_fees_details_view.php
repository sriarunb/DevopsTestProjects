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
                             <a href="customer_fees.php" class="btn btn-info">ADD NEW FEES</a><hr>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							 <form name="form1" method="post" action="customer_fees_details_view_next.php">
			    <table width="968" border="0">
  <tr>
    <td width="139">From Date: </td>
    <td width="255"><?php	
	include('cal.php');				
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    <td width="161">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date :
&nbsp;&nbsp;&nbsp;</td>
    <td width="350"><?php					
      $date_default = "";
     
      
	  
         $date_default =date('Y-m-d');
      $year=date('Y')-10;
	  $syear=date('Y')-20;



	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default))
			
			
			);
      $myCalendar->dateAllow("$syear-01-01","$date_default");
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2000, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
    <td width="249"><input type="submit" name="Submit" class="btn btn-primary" value="SEARCH"></td>
  </tr>
</table>		  
			  </form> 
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        
  <tr>
    <th width="57"><div align="center">SI NO </div></th>
    <th width="97"><div align="center">Customer Photo</div></th>
    <th width="97"><div align="center">Customer Name</div></th>
    <th width="104"><div align="center">Fees Amount </div></th>
    <th width="81"><div align="center">Fees Date </div></th>
  
    <th width="57"><div align="center">Delete</div></th>
  </tr>
   <?php 
  $sl=1;
  include('db_connect.php');
  $tot=0;
  $sql="select * from customer_fees_details cfd,customer_details cd where cfd.customer_id=cd.customer_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {  
  $tot=$tot+$row['fees_amount'];
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
     <td><img src="../photo/<?php echo $row['image'];?>" width="100" height="100"></td>
    <td><a href="customer_details_edit.php?customer_id=<?php echo $row['customer_id'];?>"><?php echo $row['customer_name'];?></a></td>
	 <td><?php echo $row['fees_amount'];?></td>
	  <td><?php echo $row['fees_date'];?></td>
	 
	 <td><a href="customer_fees_details_delete.php?customer_fees_id=<?php echo $row['customer_fees_id'];?>"><img src="assets/img/delete icon.png" width="35px" height="35px"></a></td>
  </tr>
  <?php
  }
  ?>
 </tbody>
  <tr>
    <th width="57"><div align="center"></div></th>
    <th width="97"><div align="center"></div></th>
    <th width="97"><div align="left">Total Fees</div></th>
    <th width="104"><div align="left"><?php echo $tot; ?> </div></th>
    <th width="81">&nbsp;</th>
    <th width="57">&nbsp;</th>
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




