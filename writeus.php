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
			<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span>Write to Us</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
<!-- 728x90 -->	
	<!-- Write to us -->
	<div class="write-agileits">
		<div class="container">
			<h2>Write to Us</h2>
			<form action="#" method="post">
			<div class="agileits">
				<label>Email:</label>
				<input type="email" name="email" placeholder="" required="required" />
			</div>
			<div class="agileits">
				<label>Name:</label>
				<input type="text" name="name" placeholder="" />
			</div>
			<div class="agileits">
				<label>Type of issue:</label>
				<select id="" class="frm-field required">
					<option value="select">--Select Issue--</option>  
					<option value="Category">Issue1</option>   
					<option value="Category">Issue2</option>   
					<option value="Category">Issue3</option>   
					<option value="Category">Issue4</option>   
					<option value="Category">Issue5</option>
					<option value="Category">Issue6</option>   					
				</select>
			</div>
			<div class="agileits w3_writetoustextarea">
				<label>Description:</label>
				<textarea name="Comments" placeholder=""></textarea>
			</div>
			<div class="agileits w3_attachments">
				<label>Attachments:</label>
				<div class="photos-upload-view">
						<form id="upload" action="https://p.w3layouts.com/demos_new/template_demo/07-06-2017/match-demo_Free/360227837/web/index.html" method="POST" enctype="multipart/form-data">

						<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

						<div>
							<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
							<div id="filedrag">or drop files here</div>
						</div>

						<div id="submitbutton">
							<button type="submit">Upload Files</button>
						</div>


						<div id="messages">
						<p>Status Messages</p>
						</div>
						</div>
					
				</div>
				<div class="w3_submit">
					<input type="submit" value="Submit"/>
				</div>
			</form>
			</form>
		</div>
	</div>
	<!-- //Write to us -->
		<!-- 728x90 -->
	<?php include(SHARED_PATH . '/public_footer.php'); ?>
	