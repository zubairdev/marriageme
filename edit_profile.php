<?php require_once('private/initialize.php'); ?>
<?php

// require_login();

if (!isset($_GET['id'])) {
    redirect_to(url_for('index.php'));
}
$id = $_GET['id'];
$profile = Profile::find_by_id($id);
if ($profile == false) {
    redirect_to(url_for('profile.php'));
}
if (is_post_request()) {

    $args = $_POST['user'];
    $profile->merge_attributes($args);
    $result = $profile->save();

    if ($result == true) {
        echo "<script>alert('Profile Edited..');</script>";
    } else { /* shoe error */ }

} else {
    // display the form
}
include(SHARED_PATH . '/staff_header.php');
?>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script> -->
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
		<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span>Your Profile</span></span>
	</div>
</div>
<!-- //breadcrumbs -->

<!-- Multi Process form start -->
<div class="write-agileits">
<form id="msform" class="p-0" method="POST" action="" enctype="multipart/form-data">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Detail</li>
    <li>Education Detail</li>
    <li>Family Detail</li>
    <li>Lifestyle Detail</li>
    <li>Desired Partner Detail</li>
  </ul>

  <?php include('form_fields.php'); ?>
</form>
</div>
<!-- Multi Process form End -->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
