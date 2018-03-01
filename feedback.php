<?php require_once('private/initialize.php'); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>
<!-- 728x90 -->
<!-- inner banner -->	
	<div class="w3layouts-inner-banner">
		<div class="container">
			<div class="logo">
				<h1><a class="cd-logo link link--takiri" href="index.php">Match <span><i class="fa fa-heart" aria-hidden="true"></i>Made in heaven.</span></a></h1>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //inner banner -->	
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span>Feedback</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- 728x90 -->
	<!-- feedback -->
	<div class="feedback">
		<div class="container">
			<h2>Tell us what you think of us</h2>
			<p>Please feel free to post your questions, comments and suggestions. We are eager to assist you and serve you better.</p>
			<p class="text-right"><span style="color:red;font-weight: 100;">*</span>Mandatory</p>
			<form action="#" method="post">
				<div class="col-md-6">
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>First name:</label>
						<input type="text" placeholder="First Name" required="required"/>
					</div>
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>Your Email:</label>
						<input type="email" placeholder="Email" required="required"/>
					</div>
					<div class="agileits">
						<label><span style="color:red;font-weight: 100;">*</span>Category:</label>
						<select id="" class="frm-field required">
						<option value="select">--Select--</option>  
						<option value="Category">Category1</option>   
						<option value="Category">Category2</option>   
						<option value="Category">Category3</option>   
						<option value="Category">Category4</option>   
						<option value="Category">Category5</option>
						<option value="Category">Category6</option>   					
					</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="agileits">
						<label>Last name:</label>
						<input type="text" placeholder="Last Name" required="required"/>
					</div>
					<div class="agileits">
						<label>Username:</label>
						<input type="text" placeholder="Username" required="required"/>
					</div>
					
					<div class="agileits">
						<label>Phone no:</label>
						<input type="tel" placeholder="Phone no" required="required"/>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12 w3_feedbacktextmessage">
					<label><span style="color:red;font-weight: 100;">*</span>Feedback:</label>
					<textarea name="Comments" placeholder=""></textarea>
				</div>
				<div class="clearfix"></div>
				<div class="w3_submit">
					<input type="submit" value="Submit"/>
				</div>
			</form>
		</div>
	</div>
	<!-- //feedback -->
	<?php include(SHARED_PATH . '/public_footer.php'); ?>
	