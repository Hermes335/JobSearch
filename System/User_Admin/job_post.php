<!doctype html>
<html lang="en">	
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/component.css" rel="stylesheet">
	<link href="admin.css" rel="stylesheet">
</head>
<body class="not-transparent-header">

	<div class="container-wrapper">

		<header class="header">

			<div class="flex">
		
				<div id="menu-btn" class="fas fa-bars-staggered"></div>
		
				<a href="home.html">
					<img src="JoB.svg" alt="">
				</a>
				<nav class="navbar">
					<a href="home.html">Home</a>
					<a href="about.html">About</a>
					<a href="jobs.html">All Jobs</a>
					<a href="contact.html">Contact Us</a>
					<a href="login.html">Account</a>
				</nav>
			</div>
		
		</header>
			
			<div class="section sm">
			
				<div class="container">
				
					<div class="row">
						
							<div class="col-sm-5 col-md-4">
							
								<div class="company-detail-sidebar">
									
									<div class="image">
										
									</div>
									
									<h2 class="heading mb-15"><h4>Company Name</h4>
								
									<p class="location"><i class="fa fa-map-marker"></i> Location <span class="block"> <i class="fa fa-phone"></i> </span></p>
									
									<ul class="meta-list clearfix">
										<li>
											<h4 class="heading">Established In:</h4>
											<p>php</p>
										</li>
										<li>
											<h4 class="heading">Type:</h4>
											<p>php</p>
										</li>
										<li>
											<h4 class="heading">People:</h4>
											 <p>php</p>
										</li>
										<li>
											<h4 class="heading">Website: </h4>
											<p>php with the link of company website</p>
										</li>
									</ul>
									
									
									<a href="./" class="btn btn-primary mt-5"><i class="fa fa-pencil-square-o mr-5"></i>Edit</a>
									
								</div>
					
					
							</div>

							<form class="post-form-wrapper" action="save_job.php" method="POST" autocomplete="off">
    
								<div class="col-sm-7 col-md-8">
								
									<div class="company-detail-wrapper">

										<div class="company-detail-company-overview  mt-0 clearfix">
											
											<div class="section-title-02">
												<h3 class="text-left">Post a Job</h3>
											</div>

											<form class="post-form-wrapper" action="app/post-job.php" method="POST" autocomplete="off">
									
												<div class="row gap-20">
												
											
													<div class="col-sm-8 col-md-8">
													
														<div class="form-group">
															<label>Job Title</label>
															<input name="title" required type="text" class="form-control" placeholder="Enter job title">
														</div>
														
													</div>
													
													<div class="clear"></div>
													
													<div class="col-sm-4 col-md-4">
													
														<div class="form-group">
															<label>City</label>
															<input name="city" required type="text" class="form-control" placeholder="Enter city">
														</div>
														
													</div>
													
													<div class="col-sm-4 col-md-4">
													
														<div class="form-group">
															<label>Country</label>
															<select name="country" required class="selectpicker show-tick form-control" data-live-search="true">
																<option disabled value="">Select</option>
																<?php
																// Connect to the database
																require '..\constants\db_config.php';
																
																// Create connection
																$conn = new mysqli($servername, $username, $password, $dbname);
																
																// Check connection
																if ($conn->connect_error) {
																	die("Connection failed: " . $conn->connect_error);
																}
																
																// Perform query
																$sql = "SELECT * FROM tbl_countries";
																$result = $conn->query($sql);
																
																// Generate options based on query result
																if ($result->num_rows > 0) {
																	while($row = $result->fetch_assoc()) {
																		echo "<option value='" . $row["country_code"] . "'>" . $row["country_name"] . "</option>";
																	}
																} else {
																	echo "0 results";
																}
																
																// Close connection
																$conn->close();
																?>
															</select>
														</div>
														
													</div>
													
													<div class="clear"></div>
													
													<div class="col-sm-4 col-md-4">
													
														<div class="form-group">
															<label>Job Category</label>
																<select name="category" required class="selectpicker show-tick form-control" data-live-search="true">
																<option disabled value="">Select</option>
																<?php
															// Connect to the database
															require '..\constants\db_config.php';
															
															// Create connection
															$conn = new mysqli($servername, $username, $password, $dbname);
															
															// Check connection
															if ($conn->connect_error) {
																die("Connection failed: " . $conn->connect_error);
															}
															
															// Perform query
															$sql = "SELECT * FROM tbl_categories";
															$result = $conn->query($sql);
															
															// Generate options based on query result
															if ($result->num_rows > 0) {
																while($row = $result->fetch_assoc()) {
																	echo "<option value='" . $row["id"] . "'>" . $row["category"] . "</option>";
																}
															} else {
																echo "0 results";
															}
															
															// Close connection
															$conn->close();
															?>
															</select>
												
															
															</div>
															
														</div>
														<div class="col-sm-4 col-md-4">
														
															<div class="form-group">
																<label>Salary</label>
																<input name="salary" required type="text" class="form-control" placeholder="Wawart">
															</div>
															
														</div>
														
														<div class="clear"></div>
														
														<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
														
															<div class="form-group mb-20">
																<label>Job Type:</label>
																<select name="jobtype" required class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All">
																	<option value="" selected>Select</option>
																	<option value="Full-time" data-content="<span class='label label-warning'>Full-time</span>">Full-time</option>
																	<option value="Part-time" data-content="<span class='label label-danger'>Part-time</span>">Part-time</option>
																	<option value="Freelance" data-content="<span class='label label-success'>Freelance</span>">Freelance</option>
																</select>
															</div>
															
														</div>
														
														<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
														
															<div class="form-group mb-20">
																<label>Experience:</label>
																<select name="experience" required class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All">
																	<option value="" selected >Select</option>
																	<option value="Expert">Expert</option>
																	<option value="2 Years">2 Years</option>
																	<option value="3 Years">3 Years</option>
																	<option value="4 Years">4 Years</option>
																	<option value="5 Years">5 Years</option>
																</select>
															</div>
															
															
														</div>

														<div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">
														
															<div class="form-group mb-20">
																<label>Shift:</label>
																<select name="shift" required class="selectpicker show-tick form-control" data-live-search="false" data-selected-text-format="count > 3" data-done-button="true" data-done-button-text="OK" data-none-selected-text="All">
																	<option value="" selected >Select</option>
																	<option value="Day Shift">Day Shift</option>
																	<option value="Night Shift">Night Shift</option>
																</select>
															</div>
															
															
														</div>

														<div class="clear"></div>
														
														<div class="col-sm-12 col-md-12">
														
															<div class="form-group bootstrap3-wysihtml5-wrapper">
																<label>Job Description</label>
																<textarea class="form-control bootstrap3-wysihtml5" name="description" required placeholder="Enter description ..." style="height: 200px;"></textarea>
															</div>
															
														</div>
														
														<div class="clear"></div>
														
														<div class="col-sm-12 col-md-12">
														
															<div class="form-group bootstrap3-wysihtml5-wrapper">
																<label>Job Responsibilies</label>
																<textarea name="responsiblities" required class="form-control bootstrap3-wysihtml5" placeholder="Enter responsiblities..." style="height: 200px;"></textarea>
															</div>
															
														</div>
														
														<div class="clear"></div>
														
														<div class="col-sm-12 col-md-12">
														
															<div class="form-group bootstrap3-wysihtml5-wrapper">
																<label>Requirements</label>
																<textarea name="requirements" required class="form-control bootstrap3-wysihtml5" placeholder="Enter requirements..." style="height: 200px;"></textarea>
															</div>
															
														</div>
														
														<div class="clear"></div>
														

														
														<div class="clear"></div>
														

														
														<div class="clear mb-10"></div>

														
														<div class="clear mb-15"></div>

														
														<div class="clear"></div>
														
														<div class="col-sm-6 mt-30">
															<button type="submit"  onclick = "validate(this)" class="btn btn-primary btn-lg">Post Your Job</button>
														</form>
													</div>

												</div>
												
											</form>
											
										</div>
										
									</div>

								</div>
								


						</div>
						
					</div>
				
				</div>
			
			</div>

			<footer class="footer">

				<section class="grid">
			
					<div class="box">
						<h3>quick links</h3>
						<a href="home.html"><i class="fas fa-angle-right"></i>home</a>
						<a href="about.html"><i class="fas fa-angle-right"></i>about</a>
						<a href="jobs.html"><i class="fas fa-angle-right"></i>all jobs</a>
						<a href="contact.html"><i class="fas fa-angle-right"></i>contact us</a>
						<a href="#"><i class="fas fa-angle-right"></i>filter search</a>
					</div>
			
					<div class="box">
						<h3>extra links</h3>
						<a href="#"><i class="fas fa-angle-right"></i>account</a>
						<a href="login.html"><i class="fas fa-angle-right"></i>login</a>
						<a href="register.html"><i class="fas fa-angle-right"></i>register</a>
						<a href="#"><i class="fas fa-angle-right"></i>post job</a>
						<a href="#"><i class="fas fa-angle-right"></i>dashboard</a>
					</div>
			
					<div class="box">
						<h3>follow us</h3>
						<a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
						<a href="#"><i class="fab fa-twitter"></i>twitter</a>
						<a href="#"><i class="fab fa-instagram"></i>instagram</a>
			
					</div>
			
				</section>
			
				<div class="credit">&copy; copyright @ 2024 by <span>PAULO</span> | all rights reserved</div>
			
			</footer>
		
	</div>

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>


<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>


<script type="text/javascript" src="../js/fileinput.min.js"></script>
<script type="text/javascript" src="../js/customs-fileinput.js"></script>




<script type="text/javascript" src="../js/jquery.sheepItPlugin.js"></script>
<script type="text/javascript" src="../js/customs-sheepItPlugin.js"></script>

<script>

	let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.scroll = () =>{
    navbar.classList.remove('active');
}

document.querySelector('input[type="number"]').forEach(inputNumber => {
    inputNumber.oninput = () => {
        if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0,inputNumber.maxLength);
    };
});

</script>

</body>

</html>