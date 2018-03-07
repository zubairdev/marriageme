<?php

if (!isset($profile)) {
	redirect_to(url_for('index.php'));
}

?>

<!-- First Personal Detail fieldsets -->
  
  <fieldset>
    <h2 class="fs-title">Personal Detail</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="hidden" name="user[user_id]" value="<?php echo $session->user_id; ?>" />
    <input type="hidden" name="user[profile_exist]" value="<?php echo '1'; ?>" />
    <input type="text" name="user[personal_name]" class="require_field" value="<?php echo $profile->personal_name; ?>" placeholder="Your Name"  />
    <select name="user[personal_gender]" class="require_field" >
    	<option value="">Select Gender</option>
        <?php foreach(Profile::GENDERS as $gender) { ?>
    	<option value="<?php echo $gender ?>"<?php if ($profile->personal_gender == $gender) { echo 'selected'; } ?>><?php echo $gender ?></option>
        <?php } ?>
    </select>
    <input type="text" name="user[personal_age]" value="<?php echo $profile->personal_age; ?>" placeholder="Your Age" />
    <input type="text" name="user[personal_height]" value="<?php echo $profile->personal_height; ?>" placeholder="Your Height" />
    <select name="user[personal_religion]" class="frm-field required " placeholder="Your Religion" >
    	<option value="" >Select Religion</option>
        <?php foreach (Profile::RELIGIONS as $religion) { ?>
    	<option value="<?php echo $religion ?>" <?php if($profile->personal_religion == $religion) { echo 'selected'; } ?>><?php echo $religion ?></option>
        <?php } ?>
    </select>
    <select name="user[personal_caste]" class="frm-field required " placeholder="Your Caste" >
    	<option value="">Select Caste</option>
        <?php foreach (Profile::CASTS as $cast) { ?>
    	<option value="<?php echo $cast ?>"<?php if ($profile->personal_caste == $cast) { echo 'selected'; } ?>><?php echo $cast ?></option>
        <?php } ?>
    </select>
    <select name="user[personal_marital]" class="frm-field required " placeholder="Your Marital Status" >
    	<option value="">Select Marital Status</option>
        <?php foreach (Profile::MARITAL_STATUS as $marital) { ?>
    	<option value="<?php echo $marital ?>"<?php if ($profile->personal_marital == $marital) { echo 'selected'; } ?>><?php echo $marital ?></option>
        <?php } ?>
    </select>
    <select name="user[personal_tounge]" class="frm-field required " placeholder="Your Mother Tounge" >
    	<option value="">Select Mother Tounge</option>
        <?php foreach (Profile::TOUNGES as $tounge) { ?>
    	<option value="<?php echo $tounge ?>"<?php if ($profile->personal_tounge == $tounge) { echo 'selected'; } ?>><?php echo $tounge ?></option>
        <?php } ?>
    </select>
    <input type="text" name="user[personal_occupation]" value="<?php echo $profile->personal_occupation; ?>" placeholder="Your Occupation"  />
    <input type="text" name="user[personal_ann_income]" value="<?php echo $profile->personal_ann_income; ?>" placeholder="Your Annual Income" />
    <select name="user[personal_country]" class="frm-field required " >
    	<option value="">Select country</option>
        <?php foreach (Profile::COUNTRIES as $country) { ?>
    	<option value="<?php echo $country ?>"<?php if ($profile->personal_country == $country) { echo 'selected'; } ?>><?php echo $country ?></option>
        <?php } ?>
    </select>
    <input type="text" name="user[personal_city]" value="<?php echo $profile->personal_city; ?>" placeholder="Your City"  />
    <textarea name="user[personal_about]" placeholder="Describe Yourself"><?php echo $profile->personal_about; ?></textarea>
    <input type="file" id="fileselect" name="user[personal-image]" multiple="multiple" />
    	<!-- Form Next Button -->
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <!-- Second Education Detail fieldsets -->
  <fieldset>
    <h2 class="fs-title">Education Detail</h2>
    <h3 class="fs-subtitle">This is step 2</h3>
    <input type="text" name="user[edu_HE]" value="<?php echo $profile->edu_HE; ?>" placeholder="Your Highest Education"  />
    <input type="text" name="user[edu_PG]" value="<?php echo $profile->edu_PG; ?>" placeholder="Your Post Graduation Degree" />
    <input type="text" name="user[edu_PG_coll]" value="<?php echo $profile->edu_PG_coll; ?>" placeholder="Your Post Graduation College Name" />
    <input type="text" name="user[edu_UG_deg]" value="<?php echo $profile->edu_UG_deg; ?>" placeholder="Your Under Graduate Degree" />
    <input type="text" name="user[edu_School]" value="<?php echo $profile->edu_School; ?>" placeholder="Your School Name" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

<!-- Third Family Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Family Detail</h2>
    <h3 class="fs-subtitle">This is step 3</h3>
    <input type="text" name="user[family_mother]" value="<?php echo h($profile->family_mother); ?>" placeholder="Your Mother Name" />
    <input type="text" name="user[family_father]" value="<?php echo h($profile->family_father); ?>" placeholder="Your Father Name" />
    <input type="text" name="user[family_sisters]" value="<?php if($profile->family_sisters != 0) {echo h($profile->family_sisters) . " sister's";} ?>" placeholder="How many sisters you have?" />
    <input type="text" name="user[family_brothers]" value="<?php if($profile->family_brothers != 0) {echo h($profile->family_brothers) . " brother's";} ?>" placeholder="How many brothers you have?" />
    <input type="text" name="user[family_income]" value="<?php echo h($profile->family_income); ?>" placeholder="Your family income" />
    <input type="text" name="user[family_stay]" value="<?php echo h($profile->family_stay); ?>" placeholder="Where your family lived?" />
    <input type="text" name="user[family_value]" value="<?php echo h($profile->family_value); ?>" placeholder="Family Values: Priority/Moderate" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

    <!-- Fourth Lifestyle Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Lifestyle Detail</h2>
    <h3 class="fs-subtitle">This is step 4</h3>
    <input type="text" name="user[lifestyle_appearance]" value="<?php echo h($profile->lifestyle_appearance); ?>" placeholder="Appearance: Fair, 55kg" />
    <input type="text" name="user[lifestyle_assets]" value="<?php echo h($profile->lifestyle_assets); ?>" placeholder="Assets: Not Filled in" />
    <input type="text" name="user[lifestyle_habits]" value="<?php echo h($profile->lifestyle_habits); ?>" placeholder="Habits: Vegetarian, Doesn't Drink, Doesn't Smoke" />
    <input type="text" name="user[lifestyle_language]" value="<?php echo h($profile->lifestyle_language); ?>" placeholder="Languages Known: English, Hindi, Urdu" />
    <input type="text" name="user[lifestyle_bloodgroup]" value="<?php echo h($profile->lifestyle_bloodgroup); ?>" placeholder="Blood Group: AB+" />
    <input type="text" name="user[lifestyle_stay]" value="<?php echo h($profile->lifestyle_stay); ?>" placeholder="Stay: sed, USA" />
    <!-- Form Next and Previous Button -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

<!-- Fifth Desired Partner Detail fieldsets -->

  <fieldset>
    <h2 class="fs-title">Desired Partner Detail</h2>
    <h3 class="fs-subtitle">This is step 5</h3>
    <input type="text" name="user[partner_age]" value="<?php echo h($profile->partner_age); ?>" placeholder="Age: 23" />
    <input type="text" name="user[partner_height]" value="<?php echo h($profile->partner_height); ?>" placeholder="Height: 5' 2, to 5' 6" />
    <select name="user[partner_marital]" class="frm-field required ">
        <option value="">Marital Status</option>
        <?php foreach (Profile::MARITAL_STATUS as $marital) { ?>
        <option value="<?php echo $marital ?>"<?php if ($profile->personal_marital == $marital) { echo 'selected'; } ?>><?php echo $marital ?></option>
        <?php } ?>
    </select>
    <select name="user[partner_religion]" class="frm-field required ">
        <option value="">Select Religion</option>
        <?php foreach (Profile::RELIGIONS as $religion) { ?>  
        <option value="<?php echo $religion; ?>"<?php if ($profile->partner_religion == $religion) { echo 'selected'; } ?>><?php echo $religion; ?></option>
        <?php } ?>                  
    </select>
    <select name="user[partner_caste]" class="frm-field required ">
        <option value="">Select Caste</option>
        <?php foreach (Profile::CASTS as $cast) { ?>
        <option value="<?php echo $cast; ?>"<?php if ($profile->partner_caste == $cast) { echo 'selected'; } ?>><?php echo $cast; ?></option>
        <?php } ?>    
    </select>
    <input type="text" name="user[partner_edu]" value="<?php echo h($profile->partner_edu); ?>" placeholder="Education: Graduation" />
    <input type="text" name="user[partner_occupation]" value="<?php echo h($profile->partner_occupation); ?>" placeholder="Occupation: Software Engineer" />
    <input type="text" name="user[partner_income]" value="<?php echo h($profile->partner_income); ?>" placeholder="Income: Doesn't matter" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
    <button type="submit" class="previous action-button" name="upload">Submit</button>
  </fieldset>

