<?php require_once('private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>
<!---728x90 -->
<div class="w3layouts-banner" id="home">
<div class="container">
	<div class="logo">
		<h1><a class="cd-logo link link--takiri" href="index.php">Match <span><i class="fa fa-heart" aria-hidden="true"></i>Made in heaven.</span></a></h1>
	</div>
	<div class="clearfix"></div>
	<div class="agileits-register">
		<h3>Register NOW!</h3>
		<form action="#" method="post">
				<div class="w3_modal_body_grid">
					<span>Profile For:</span>
					<select id="w3_country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Select</option>
						<option value="null">Myself</option>   
						<option value="null">Son</option>   
						<option value="null">Daughter</option>   
						<option value="null">Brother</option>   
						<option value="null">Sister</option>  
						<option value="null">Relative</option>
						<option value="null">Friend</option>						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Name:</span>
					<input type="text" name="Name" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid">
					<span>Gender:</span>
					<div class="w3_gender">
						<div class="colr ert">
							<label class="radio"><input type="radio" name="radio" checked=""><i></i>Male</label>
						</div>
						<div class="colr">
							<label class="radio"><input type="radio" name="radio"><i></i>Female</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Date Of Birth:</span>
					<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}" required="" />
				</div>
				<div class="w3_modal_body_grid">
					<span>religion:</span>
					<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required"> 
						<option value="null">Select Religion</option>
						<option value="null">Muslim</option>
						<option value="null">Hindu</option>    
						<option value="null">Christian</option>   
						<option value="null">Sikh</option>   
						<option value="null">Jain</option>   
						<option value="null">Buddhist</option>
						<option value="null">No Religious Belief</option>   						
					</select>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
				<span>Mobile No:</span>
				<!-- country codes (ISO 3166) and Dial codes. -->
					<input id="phone" type="tel">
				  <!-- Load jQuery from CDN so can run demo immediately -->
				  <script src="js/intlTelInput.js"></script>
				  <script>
					$("#phone").intlTelInput({
					  // allowDropdown: false,
					  // autoHideDialCode: false,
					  // autoPlaceholder: "off",
					  // dropdownContainer: "body",
					  // excludeCountries: ["us"],
					  // formatOnDisplay: false,
					  // geoIpLookup: function(callback) {
					  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
					  //     var countryCode = (resp && resp.country) ? resp.country : "";
					  //     callback(countryCode);
					  //   });
					  // },
					  // initialCountry: "auto",
					  // nationalMode: false,
					  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
					  // placeholderNumberType: "MOBILE",
					  // preferredCountries: ['cn', 'jp'],
					  // separateDialCode: true,
					  utilsScript: "js/utils.js"
					});
				  </script>
				</div>
				<div class="w3_modal_body_grid">
					<span>Email:</span>
					<input type="email" name="Email" placeholder=" " required=""/>
				</div>
				<div class="w3_modal_body_grid w3_modal_body_grid1">
					<span>Password:</span>
					<input type="password" name="Password" placeholder=" " required=""/>
				</div>
				<div class="w3-agree">
					<input type="checkbox" id="c1" name="cc">
					<label class="agileits-agree">I have read & agree to the <a href="terms.php">Terms and Conditions</a></label>
				</div>
				<input type="submit" value="Register me" />
				<div class="clearfix"></div>
				<p class="w3ls-login">Already a member? <a href="#" data-toggle="modal" data-target="#myModal">Login</a></p>
			</form>
		</div>
		<!-- Modal -->
				<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				  <div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>		
						<h4 class="modal-title">Login to Continue</h4>
					  </div>
					  <div class="modal-body">
						<div class="login-w3ls">
							<form id="signin" action="#" method="post">
								<label>User Name </label>
								<input type="text" name="User Name" placeholder="Username" required="">
								<label>Password</label>
								<input type="password" name="Password" placeholder="Password" required="">	
								<div class="w3ls-loginr"> 
									<input type="checkbox" id="brand" name="checkbox" value="">
									<span> Remember me ?</span> 
									<a href="#">Forgot password ?</a>
								</div>
								<div class="clearfix"> </div>
								<input type="submit" name="submit" value="Login">
								<div class="clearfix"> </div>
								<div class="social-icons">
									<ul>  
										<li><a href="#"><span class="icons"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="text">Facebook</span></a></li> 
										<li class="twt"><a href="#"><span class="icons"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="text">Twitter</span></a></li>  
									</ul> 
									<div class="clearfix"> </div>
								</div>	
							</form>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<!-- //Modal -->
	</div>
</div>
<!---728x90--->
<!-- Find your soulmate -->
	<div class="w3l_find-soulmate text-center">
		<h3>Find Your Soulmate</h3>
			<div class="container">
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<h3>Sign Up</h3>
						<p>Signup for free and Upload your profile</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-search" aria-hidden="true"></i>
						<h3>Search</h3>
						<p>Search for your right partner</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>Connect</h3>
						<p>Connect your perfect Match</p>
					</div>
				</a>
				<a class="scroll" href="#home">
					<div class="col-md-3 w3_soulgrid">
						<i class="fa fa-comments-o" aria-hidden="true"></i>
						<h3>Interact</h3>
						<p>Become a member and start Conversation</p>
					</div>
				</a>
				<div class="clearfix"> </div>
			</div>
	</div>
	<!-- //Find your soulmate -->
	<!-- Header -->

	<!-- ===================================================================
	========================= Couple section start ===================== -->

	<header class="default">
		<h1 class="h1-margin">Michael <em>&amp;</em> Annie</h1>
		<span class="ceremony-date">June 10<sup>th</sup>, 2022</span>
	</header>

	<section id="couple" class="row">
		<div class="columns large-12">
			<div class="columns large-4 medium-4">
				<span class="headshot groom">
					<img src="images/headshot-groom.png" alt="groom headshot" width="233">
				</span>
				<h3>Michael</h3>
				<p class="desc groom">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et vulputate magna, sed ornare elit. Nunc vitae quam sit amet dolor tincidunt sodales et ut tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vitae mi semper, vulputate
					<span class="social groom">
						<a title="Like us on Facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
				        <a title="Follow us on Twitter" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				        <a title="We're on Pinterest" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p fa-2x"></i></a>
			    	</span>
				</p>
			</div><!-- End .large-4 -->
			<div class="columns large-4 medium-4">
				<p class="giant-ampersand">&amp;</p>
			</div><!-- End .large-4 -->
			<div class="columns large-4 medium-4">
				<span class="headshot bride">
					<img src="images/headshot-bride.png" alt="bride headshot" width="233">
				</span>
				<h3>Annie</h3>
				<p class="desc bride">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et vulputate magna, sed ornare elit. Nunc vitae quam sit amet dolor tincidunt sodales et ut tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam vitae mi semper, vulputate
					<span class="social bride">
						<a title="Like us on Facebook" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
				        <a title="Follow us on Twitter" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				        <a title="We're on Pinterest" href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p fa-2x"></i></a>
			    	</span>
				</p>
			</div><!-- End .large-4 -->
		</div><!-- End .large-12 -->
	</section><!-- End #couple -->

	<!-- Couple gallery section -->
	<section id="couple-gallery">
		<h2>Gallery</h2>
		<div class="il-scattered-gallery">
			<a href="#" class="il-photo-01 il-highlight"><img src="images/gallery/img1.jpg" alt=""></a>
			<a href="#" class="il-photo-02"><img src="images/gallery/img2.jpg" alt=""></a>
			<a href="#" class="il-photo-03"><img src="images/gallery/img3.jpg" alt=""></a>
			<a href="#" class="il-photo-04"><img src="images/gallery/img4.jpg" alt=""></a>
			<a href="#" class="il-photo-05"><img src="images/gallery/img5.jpg" alt=""></a>
			<a href="#" class="il-photo-06"><img src="images/gallery/img1.jpg" alt=""></a>
			<a href="#" class="il-photo-07"><img src="images/gallery/img2.jpg" alt=""></a>
		</div>
		<div class="couple-slideshow-wrap">
			<ul id="couple-slideshow"></ul>
			<ul class="couple-thumbs"></ul>
		</div><!-- End .couple-slideshow-wrap -->
		<a id="gallery-launcher" href="#">Click to view gallery</a>
		<div class="couple-mobile-slider-wrap"><div class="couple-mobile-slider"></div></div>
	</section><!-- End #couple-gallery -->
	
	<!-- ===================================================================
	========================= Couple section End ======================= -->

	<!-- 728x90 -->	
		<!-- featured profiles -->			
			<div class="w3layouts_featured-profiles">
				<div class="container">
				<!-- slider -->
				<div class="agile_featured-profiles">
					<h2>Featured Profiles</h2>
							<ul id="flexiselDemo3">
								<li>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p1.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p2.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.php">
											<div class="profile-image">
												<img src="images/p3.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p4.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.php">
											<div class="profile-image">
												<img src="images/p5.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.php">
											<div class="profile-image">
												<img src="images/p6.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p7.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.php">
											<div class="profile-image">
												<img src="images/p8.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p9.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p10.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p11.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.php">
											<div class="profile-image">
												<img src="images/p12.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p7.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="bride_profile.php">
											<div class="profile-image">
												<img src="images/p5.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p1.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="groom_profile.php">
											<div class="profile-image">
												<img src="images/p2.jpg" class="img-responsive" alt="profile image">
												<div class="agile-overlay">
												<h4>Profile ID: 458645</h4>
													<ul>
														<li><span>Age / Height</span>: 26 / 5'0''</li>
														<li><span>Caste</span>: Ipsum</li>
														<li><span>Religion</span>: Lorem</li>
														<li><span>Profession</span>: IT Software</li>
														<li><span>Profile Created By</span>: Self</li>
														<li><span>Location</span>: Semrd, 7th c, Los</li>
													</ul>
												</div>
											</div>
										</a>
									</div>
								</li>
							</ul>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->	
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: false,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
			<!-- //featured profiles -->		   
					   
		<!-- Slider Carousel Area Start -->
		<div id="bridesmaid-gallery">
			<div class="container">
				<h2>Bridesmaids</h2>
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>1</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>2</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>3</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>4</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>5</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>6</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>7</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>8</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- <h4>9</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- h4>10</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- h4>11</h4> -->
					</div>
					<div class="item">
						<img src="images/client_3.jpg">
						<!-- h4>12</h4> -->
					</div>
				</div>
			</div>
		</div>
			<!-- Slider Carousel Area End -->
	
	<!-- Assisted Service -->
	<div class="agile-assisted-service text-center">
		<h4>Assisted Service</h4>
		<p>Our Relationship Managers have helped thousands of members find their life partners.</p>
		<a href="assisted_services.php">Know More</a>
	</div>
	<!-- //Assisted Service -->
	
	<!-- Location -->
	<div class="location w3layouts">
		<div class="container">
			<div class="col-md-6 col-sm-6 w3layouts location-grids location-grids-1">
				<h3>Where We Are</h3>
				<h5>Our Branches</h5>
				<p>250+ branches across World, Largest Network of its Kind.</p>
			</div>
			<div class="col-md-6 col-sm-6 w3layouts location-grids location-grids-2">
				<a href="contact.php"><img src="images/location.jpg" class="img-responsive" alt="Agileits W3layouts" /></a>
			</div>
			<div class="clearfix"></div>			
		</div>
	</div>
	<!-- //Location -->
	
	<!-- Get started -->
	<!-- <div class="w3layous-story text-center">
		<div class="container">
			<h4>Your story is waiting to happen!  <a class="scroll" href="#home">Get started</a></h4>
		</div>
	</div> -->
	<!-- //Get started -->

	<?php include(SHARED_PATH . '/public_footer.php'); ?>
	
<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/07-06-2017/match-demo_Free/360227837/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2018 10:42:16 GMT -->
<!-- http://matrimony.infinitylabs.ca/ -->
