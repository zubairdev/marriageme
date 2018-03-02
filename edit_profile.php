<?php require_once('private/initialize.php'); ?>
<?php

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
        echo "<script>alert('Profile created..');</script>";
    } else { /* shoe error */ }

} else {
    // display the form
}
include(SHARED_PATH . '/public_header.php');
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

  <!-- First Personal Detail fieldsets -->
  
  <fieldset>
    <h2 class="fs-title">Personal Detail</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="user[personal_name]" class="require_field" value="<?php echo $profile->personal_name; ?>" placeholder="Your Name"  />
    <select name="user[personal_gender]" class="require_field" value="<?php echo $profile->personal_gender; ?>" >
    	<option value="">Select Gender</option>
    	<option value="Male">Male</option>
    	<option value="Female">Female</option>
    	<option value="Unisex">Unisex</option>
    </select>
    <input type="text" name="user[personal_age]" value="<?php echo $profile->personal_age; ?>" placeholder="Your Age"  />
    <input type="text" name="user[personal_height]" placeholder="Your Height"  />
    <select name="user[personal_religion]" class="frm-field required " placeholder="Your Religion"  >
    	<option value="" >Select Religion</option>
    	<option value="Muslim">Muslim</option>
    	<option value="Hindu">Hindu</option>
    	<option value="Sikh">Sikh</option>
    	<option value="Christian">Christian</option>
    	<option value="Buddhist">Buddhist</option>
    	<option value="Jain">Jain</option>
    	<option value="Parsi">Parsi</option>
    	<option value="Jewish">Jewish</option>
    	<option value="Other">Other</option>
    </select>
    <select name="user[personal_caste]" class="frm-field required " placeholder="Your Caste" >
    	<option value="">Select Caste</option>
    	<option value="Suleheria">Suleheria</option>
    	<option value="Rajput">Rajput</option>
    	<option value="Rana">Rana</option>
    	<option value="Mughal">Mughal</option>
    	<option value="Chaudhry">Chaudhry</option>
    	<option value="Arain">Arain</option>
    	<option value="Butt">Butt</option>
    	<option value="Baig">Baig</option>
    	<option value="Baloach">Baloach</option>
    	<option value="Gujjar">Gujjar</option>
    	<option value="Jat">Jat</option>
    	<option value="Malik">Malik</option>
    	<option value="Sheikh">Sheikh</option>	
    </select>
    <select name="user[personal_marital]" class="frm-field required " placeholder="Your Marital Status" >
    	<option value="">Select Marital Status</option>
    	<option value="Single">Single</option>
    	<option value="Divorced">Divorced</option>
    	<option value="Widowed">Widowed</option>
        <option value="Separated">Separated</option>	
    </select>
    <select name="user[personal_tounge]" class="frm-field required " placeholder="Your Mother Tounge" >
    	<option value="">Select Mother Tounge</option>
    	<option value="Urdu">Urdu</option>
    	<option value="English">English</option>
    	<option value="Punjabi">Punjabi</option>
    	<option value="Sindhi">Sindhi</option>
    	<option value="Hindi">Hindi</option>	
    </select>
    <input type="text" name="user[personal_occupation]" placeholder="Your Occupation"  />
    <input type="text" name="user[personal_ann_income]" placeholder="Your Annual Income" />
    <select name="user[personal_country]" class="frm-field required " required>
    	<option value="">Select country</option>
    	<option value="All">All</option>
    	<option value="Pakistan">Pakistan</option>
    	<option value="India">India</option>
    	<option value="United States">United States</option>
    	<option value="United Kingdom">United Kingdom</option>
    	<option value="Canade">Canade</option>
    	<option value="Australia">Australia</option>
    	<option value="Education/Training">Education/Training</option>
    	<option value="United Arab Emirates">United Arab Emirates</option>	
    </select>
    <input type="text" name="user[personal_city]" placeholder="Your City"  />
    <textarea name="user[personal_about]" placeholder="Describe Yourself"></textarea>
    <input type="file" id="fileselect" name="user[personal-image]" multiple="multiple" />
    	<!-- Form Next Button -->
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <!-- Second Education Detail fieldsets -->
  <fieldset>
    <h2 class="fs-title">Education Detail</h2>
    <h3 class="fs-subtitle">This is step 2</h3>
    <input type="text" name="user[edu_HE]" placeholder="Your Highest Education"  />
    <input type="text" name="user[edu_PG]" placeholder="Your Post Graduation Degree" />
    <input type="text" name="user[edu_PG_coll]" placeholder="Your Post Graduation College Name" />
    <input type="text" name="user[edu_UG_deg]" placeholder="Your Under Graduate Degree" />
    <input type="text" name="user[edu_School]" placeholder="Your School Name" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

<!-- Third Family Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Family Detail</h2>
    <h3 class="fs-subtitle">This is step 3</h3>
    <input type="text" name="user[family_mother]" placeholder="Your Mother Name" />
    <input type="text" name="user[family_father]" placeholder="Your Father Name" />
    <input type="text" name="user[family_sisters]" placeholder="How many sisters you have?" />
    <input type="text" name="user[family_brothers]" placeholder="How many brothers you have?" />
    <input type="text" name="user[family_income]" placeholder="Your family income" />
    <input type="text" name="user[family_stay]" placeholder="Where your family lived?" />
    <input type="text" name="user[family_value]" placeholder="Family Values: Priority/Moderate" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

    <!-- Fourth Lifestyle Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Lifestyle Detail</h2>
    <h3 class="fs-subtitle">This is step 4</h3>
    <input type="text" name="user[lifestyle_appearance]" placeholder="Appearance: Fair, 55kg" />
    <input type="text" name="user[lifestyle_assets]" placeholder="Assets: Not Filled in" />
    <input type="text" name="user[lifestyle_habits]" placeholder="Habits: Vegetarian, Doesn't Drink, Doesn't Smoke" />
    <input type="text" name="user[lifestyle_language]" placeholder="Languages Known: English, Hindi, Urdu" />
    <input type="text" name="user[lifestyle_bloodgroup]" placeholder="Blood Group: AB+" />
    <input type="text" name="user[lifestyle_stay]" placeholder="Stay: sed, USA" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

<!-- Fifth Desired Partner Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Desired Partner Detail</h2>
    <h3 class="fs-subtitle">This is step 5</h3>
    <input type="text" name="user[partner_age]" placeholder="Age: 23" />
    <input type="text" name="user[partner_height]" placeholder="Height: 5' 2, to 5' 6" />
    <select name="user[partner_marital]" class="frm-field required ">
        <option value="">Marital Status</option>
        <option value="Single">Single</option>
        <option value="Divorced">Divorced</option>
        <option value="Widowed">Widowed</option>
        <option value="Separated">Separated</option> 
    </select>
    <select name="user[partner_religion]" class="frm-field required ">
        <option value="">Select Religion</option>  
        <option value="Muslim">Muslim</option>   
        <option value="Hindu">Hindu</option>   
        <option value="Sikh">Sikh</option>
        <option value="Christian">Christian</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Jain">Jain</option>
        <option value="Parsi">Parsi</option>
        <option value="Jewish">Jewish</option>
        <option value="Other">Other</option>                         
    </select>
    <select name="user[partner_caste]" class="frm-field required ">
        <option value="">Select Caste</option>
        <option value="Rajput">Rajput</option>
        <option value="Rana">Rana</option>
        <option value="Mughal">Mughal</option>
        <option value="Chaudhry">Chaudhry</option>
        <option value="Arain">Arain</option>
        <option value="Butt">Butt</option>
        <option value="Baig">Baig</option>
        <option value="Baloach">Baloach</option>
        <option value="Gujjar">Gujjar</option>
        <option value="Jat">Jat</option>
        <option value="Malik">Malik</option>
        <option value="Sheikh">Sheikh</option>        
    </select>
    <input type="text" name="user[partner_edu]" placeholder="Education: Graduation" />
    <input type="text" name="user[partner_occupation]" placeholder="Occupation: Software Engineer" />
    <input type="text" name="user[partner_income]" placeholder="Income: Doesn't matter" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
    <button type="submit" class="previous action-button" name="upload">Submit</button>
  </fieldset>
</form>
</div>
<!-- Multi Process form End -->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
