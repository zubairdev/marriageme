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
		<span class="agile-breadcrumbs"><a href="index.php">Home</a> > <span>Your Profile</span></span>
	</div>
</div>
<!-- //breadcrumbs -->

<!-- Multi Process form start -->
<div class="write-agileits">
<form id="msform" class="p-0">
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
    <input type="text" name="user[personal-name]" placeholder="Email" />
    <select name="user[personal-gender]">
    	<option value="select">-- Select Gender --</option>  
    	<option value="Category">Male</option>   
    	<option value="Category">Female</option>   
    	<option value="Category">Unisex</option>      					
    </select>
    <input type="text" name="user[personal-age]" placeholder="Your Age" />
    <input type="text" name="user[personal-height]" placeholder="Your Height" />
    <select name="user[personal-religion]" class="frm-field required " placeholder="Your Religion" >
    	<option value="select">-- Select Religion --</option>  
    	<option value="Category">Muslim</option>   
    	<option value="Category">Hindu</option>   
    	<option value="Category">Sikh</option>
    	<option value="Category">Christian</option>
    	<option value="Category">Buddhist</option>
    	<option value="Category">Jain</option>
    	<option value="Category">Parsi</option>
    	<option value="Category">Jewish</option>
    	<option value="Category">Other</option>      					
    </select>
    <select name="user[personal-caste]" class="frm-field required " placeholder="Your Caste">
    	<option value="select">-- Select Caste --</option>
    	<option value="Category">Suleheria</option>
    	<option value="Category">Rajput</option>
    	<option value="Category">Rana</option>
    	<option value="Category">Mughal</option>
    	<option value="Category">Chaudhry</option>
    	<option value="Category">Arain</option>
    	<option value="Category">Butt</option>
    	<option value="Category">Baig</option>
    	<option value="Category">Baloach</option>
    	<option value="Category">Gujjar</option>
    	<option value="Category">Jat</option>
    	<option value="Category">Malik</option>
    	<option value="Category">Sheikh</option>	
    </select>
    <select name="user[personal-mar-status]" class="frm-field required " placeholder="Your Marital Status">
    	<option value="select">-- Select Marital Status --</option>
    	<option value="Category">All</option>
    	<option value="Category">Never Married</option>
    	<option value="Category">Married Earlier</option>	
    </select>
    <select name="user[personal-m-tounge]" class="frm-field required " placeholder="Your Mother Tounge">
    	<option value="select">-- Select Mother Tounge --</option>
    	<option value="Category">Urdu</option>
    	<option value="Category">English</option>
    	<option value="Category">Punjabi</option>
    	<option value="Category">Sindhi</option>
    	<option value="Category">Hindi</option>	
    </select>
    <input type="text" name="user[personal-occupation]" placeholder="Your Occupation" />
    <input type="text" name="user[personal-ann-income]" placeholder="Your Annual Income" />
    <select name="user[personal-country]" class="frm-field required ">
    	<option value="select">--Select country--</option>
    	<option value="Category">All</option>
    	<option value="Category">Pakistan</option>
    	<option value="Category">India</option>
    	<option value="Category">United States</option>
    	<option value="Category">United Kingdom</option>
    	<option value="Category">Canade</option>
    	<option value="Category">Australia</option>
    	<option value="Category">Education/Training</option>
    	<option value="Category">United Arab Emirates</option>	
    </select>
    <input type="text" name="user[personal-city]" placeholder="Your City" />
    <textarea name="user[personal-about]" placeholder="Describe Yourself"></textarea>
    <input type="file" id="fileselect" name="user[personal-image]" multiple="multiple" />
    	<!-- Form Next Button -->
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <!-- Second Education Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Education Detail</h2>
    <h3 class="fs-subtitle">This is step 2</h3>
    <input type="text" name="user[edu-HE]" placeholder="Your Highest Education" />
    <input type="text" name="user[edu-PG]" placeholder="Your Post Graduation Degree" />
    <input type="text" name="user[edu-PG-coll]" placeholder="Your Post Graduation College Name" />
    <input type="text" name="user[edu-UG-deg]" placeholder="Your Under Graduate Degree" />
    <input type="text" name="user[edu-school]" placeholder="Your School Name" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <!-- Third Family Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Family Detail</h2>
    <h3 class="fs-subtitle">This is step 3</h3>
    <input type="text" name="user[family-mother]" placeholder="Your Mother Name" />
    <input type="text" name="user[family-father]" placeholder="Your Father Name" />
    <input type="text" name="user[family-sisters]" placeholder="How many sisters you have?" />
    <input type="text" name="user[family-brothers]" placeholder="How many brothers you have?" />
    <input type="text" name="user[family-income]" placeholder="Your family income" />
    <input type="text" name="user[family-stay]" placeholder="Where your family lived?" />
    <input type="text" name="user[family-value]" placeholder="Family Values: Priority/Moderate" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <!-- Fourth Lifestyle Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Lifestyle Detail</h2>
    <h3 class="fs-subtitle">This is step 4</h3>
    <input type="text" name="user[lifestyle-appearance]" placeholder="Appearance: Fair, 55kg" />
    <input type="text" name="user[lifestyle-assets]" placeholder="Assets: Not Filled in" />
    <input type="text" name="user[lifestyle-habits]" placeholder="Habits: Vegetarian, Doesn't Drink, Doesn't Smoke" />
    <input type="text" name="user[lifestyle-languages]" placeholder="Languages Known: English, Hindi, Urdu" />
    <input type="text" name="user[lifestyle-bloodgroup]" placeholder="Blood Group: AB+" />
    <input type="text" name="user[lifestyle-stay]" placeholder="Stay: sed, USA" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <!-- Fifth Desired Partner Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Desired Partner Detail</h2>
    <h3 class="fs-subtitle">This is step 5</h3>
    <input type="text" name="user[partner-age]" placeholder="Age: 23" />
    <input type="text" name="user[partner-height]" placeholder="Height: 5' 2, to 5' 6" />
    <select name="user[partner-marital]" class="frm-field required ">
    	<option value="select">-- Marital Status --</option>
    	<option value="Category">All</option>
    	<option value="Category">Pakistan</option>
    	<option value="Category">India</option>
    	<option value="Category">United States</option>
    	<option value="Category">United Kingdom</option>
    	<option value="Category">Canade</option>
    	<option value="Category">Australia</option>
    	<option value="Category">Education/Training</option>
    	<option value="Category">United Arab Emirates</option>	
    </select>
    <select name="user[partner-religion]" class="frm-field required ">
    	<option value="select">-- Select Religion --</option>  
    	<option value="Category">Muslim</option>   
    	<option value="Category">Hindu</option>   
    	<option value="Category">Sikh</option>
    	<option value="Category">Christian</option>
    	<option value="Category">Buddhist</option>
    	<option value="Category">Jain</option>
    	<option value="Category">Parsi</option>
    	<option value="Category">Jewish</option>
    	<option value="Category">Other</option>      					
    </select>
    <select name="user[partner-caste]" class="frm-field required ">
    	<option value="select">--Select Caste--</option>
    	<option value="Category">Rajput</option>
    	<option value="Category">Rana</option>
    	<option value="Category">Mughal</option>
    	<option value="Category">Chaudhry</option>
    	<option value="Category">Arain</option>
    	<option value="Category">Butt</option>
    	<option value="Category">Baig</option>
    	<option value="Category">Baloach</option>
    	<option value="Category">Gujjar</option>
    	<option value="Category">Jat</option>
    	<option value="Category">Malik</option>
    	<option value="Category">Sheikh</option>		
    </select>
    <input type="text" name="user[partner-edu]" placeholder="Education: Graduation" />
    <input type="text" name="user[partner-occupation]" placeholder="Occupation: Software Engineer" />
    <input type="text" name="user[partner-income]" placeholder="Income: Doesn't matter" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
</div>
<!-- Multi Process form End -->
<?php include(SHARED_PATH . '/public_footer.php'); ?>
