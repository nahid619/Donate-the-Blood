
<?php 

	include 'include/header.php'; 

	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{

	

?>


<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">

							
							<div class="heading text-center">
								<h3>Welcome </h3> <h1> <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?> </h1>
							</div>
							<p class="text-center">Here you can mennage your account update your profile</p>

							<div class="test-success text-center" id="data" style="margin-top: 20px;"><?php if(isset($showFrom)) echo $showFrom; ?><!-- Display Message here-->
		    			  	
		    			  </div>


							<?php

							$safeDate= $_SESSION['save_life_date'];


                                if($safeDate == '0')
								{
								echo'<form target="" method="post">
							    <button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
								</form>';

								}
								else
								{

								$start = date_create("$safeDate");
								$end = date_create();
								$diff = date_diff( $start, $end );

								
								$diffMonth = $diff->m;
								

								if($diffMonth >=3)
								{

									echo'<form target="" method="post">
							    <button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
								</form>';

								}
								else
								{
									

								}
								echo'<div class="donors_data">
									<span class="name">congratulation!</span>
									<span>you Already safe the life .you will donate the blood after three months.we are very thanking full to you.</span>
									
									</div>';

								

									

							}



							?>


							


							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<?php
}
else{
		header("Location: ../index.php");
	}
	

include 'include/footer.php'; 
?>