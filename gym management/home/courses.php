<!DOCTYPE html>
<html lang="en">
<?php include('metatag.php'); ?>
  <body>
<?php include('top.php'); ?>
<?php include('menu.php'); ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/05.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our GYM Item</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>GYM Item <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
				
				  <?php
  $sn=1;
  include('db_connect.php');
  $sql="select * from   gym_items";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
					<div class="col-md-6 course d-lg-flex ftco-animate">
						<div class="img" style="background-image: url(../photo/img/<?php echo $row['gym_item_photo'];?>)"></div>
						<div class="text bg-light p-4">
							<h3><a href="#">Name : <?php echo $row['gym_item_name'];?></a></h3>
							<p class="subheading"><span>Discription:</span> <?php echo $row['gym_item_discription'];?></p>
							<p>Quantity : <?php echo $row['gym_item_quantity']; ?> </p>
						</div>
					</div>
					
					
					
					  <?php
	}
	?>
					
				</div>
			</div>
		</section>

		
<?php include('footer.php'); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<?php include('script.php'); ?>
    
  </body>
</html>