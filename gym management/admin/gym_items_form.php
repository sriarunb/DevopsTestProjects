<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <?php include('medatada.php');?>
   <?php include('header.php');?>
   <?php include('sidebar.php');?>
<body>
  
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <span class="style1">Gym Items </span><small>.</small>
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<!---------------------->

<form action="gym_items_insert.php"  id="formID" method="post" enctype="multipart/form-data"  >
  <div align="center">
    <table width="388" border="0">
      <tr>
        <td width="136">Gym Item Name</td>
        <td width="148"><label for="gym_item_discription"></label>
        <input type="text" name="gym_item_name"  class="validate[required] form-control" id="textfield2" /></td>
      </tr>
      <tr>
        <td>Gym Item Discription</td>
        <td><input type="text" name="gym_item_discription" class="validate[required] form-control" id="textfield" /></td>
      </tr>
      <tr>
        <td>Gym Item Quantity</td>
        <td><input type="text" name="gym_item_quantity" class="validate[required] form-control"  id="gym_item_quantity" /></td>
      </tr>
      <tr>
        <td>Gym Item Photo</td>
		 <td><input name="photo" type="file" class="validate[required] form-control" id="photo" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="button" id="button" value="Submit" class="btn btn-success" />
          <input type="reset" name="button2" id="button2" value="Reset" class="btn btn-danger" />
        </div></td>
      </tr>
    </table>
  </div>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                  </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			  <?php include('footer.php');?>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
  
	<?php include('val.php'); ?>
   
</body>
</html>