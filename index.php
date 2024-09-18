<?php 

	include ('include/header.php');

?>
<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center h2">Donate the blood, save the life</h1>
						    <h5 class="text-center h1">Donate the blood to help the others.</h5>
						</div>

						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">						
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
									<option value="">-- Select --</option>
									<optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup>
									<option value="Bogra" >Bogra</option>
									<option value="Jaipurhat" >Jaipurhat</option>
									<option value="Naogaon" >Naogaon</option>
									<option value="Natore" >Natore</option>
									<option value="Nawabganj" >Nawabganj</option>
									<option value="Pabna" >Pabna</option>
									<option value="Sirajganj" >Sirajganj</option>
									<option value="Rajshahi" >Rajshahi</option>							
								</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							A blood bank is a place where blood is collected and stored before it is used for transfusions. Blood banking takes place in the lab. This is to make sure that donated blood and blood products are safe before they are used. Blood banking also determines the blood type.

							But we made a platform who need blood they can find their blood just searching their blood group and location.and if any doners donate any blood they can also sign up here.
					        
						</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To be the best bloodbank offline and online
								<br>
								Dedicated to, integrity, service, and  in everything we do, 
								Donatetheblood works to ensure reliable access 
								to those nobel donors who wilingly donates blood to people in need. 
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								The main purpose of our website is to create & manage a platform for all blood donors of Bangladesh & remove the blood crisis.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Saving lives by providing blood at your location.
								<br>
								Through effective outreach to donors, and partnerships with the life saving community, blood donation camp sponsors, and health care facilities, 
								donatetheblood Community connects those who need blood with those generous volunteers who give.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>