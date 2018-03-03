<?php

class Profile extends DatabaseObject {

  static protected $table_name = 'profile';
  static protected $db_columns = ['id', 'personal_name', 'personal_gender', 'personal_age', 'personal_height', 'personal_religion', 'personal_caste', 'personal_marital', 'personal_tounge', 'personal_occupation', 'personal_ann_income', 'personal_country', 'personal_city', 'personal_about', 'personal_image', 'edu_HE', 'edu_PG', 'edu_PG_coll', 'edu_UG_deg', 'edu_School', 'family_mother', 'family_father', 'family_sisters', 'family_brothers', 'family_income', 'family_stay', 'family_value', 'lifestyle_appearance', 'lifestyle_assets', 'lifestyle_habits', 'lifestyle_language', 'lifestyle_bloodgroup', 'lifestyle_stay', 'partner_age', 'partner_height', 'partner_marital', 'partner_religion', 'partner_caste', 'partner_edu', 'partner_occupation', 'partner_income'];

  public $id;
  public $personal_name;
  public $personal_gender;
  public $personal_age;
  public $personal_height;
  public $personal_religion;
  public $personal_caste;
  public $personal_marital;
  public $personal_tounge;
  public $personal_occupation;
  public $personal_ann_income;
  public $personal_country;
  public $personal_city;
  public $personal_about;
  public $personal_image;
  public $edu_HE;
  public $edu_PG;
  public $edu_PG_coll;
  public $edu_UG_deg;
  public $edu_School;
  public $family_mother;
  public $family_father;
  public $family_sisters;
  public $family_brothers;
  public $family_income;
  public $family_stay;
  public $family_value;
  public $lifestyle_appearance;
  public $lifestyle_assets;
  public $lifestyle_habits;
  public $lifestyle_language;
  public $lifestyle_bloodgroup;
  public $lifestyle_stay;
  public $partner_age;
  public $partner_height;
  public $partner_marital;
  public $partner_religion;
  public $partner_caste;
  public $partner_edu;
  public $partner_occupation;
  public $partner_income;


  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

  public const CONDITION_OPTIONS = [
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];

  public const RELIGIONS = ['Muslim', 'Hindu', 'Sikh', 'Christian', 'Buddhist', 'Jain', 'Parsi', 'Jewish', 'Other'];

  public const GENDERS = ['Male', 'Female', 'Unisex'];

  public const CASTS = ['Suleheria', 'Rajput', 'Rana', 'Mughal', 'Chaudhry', 'Arain', 'Butt', 'Baig', 'Baloach', 'Gujjar', 'Jat', 'Malik', 'Sheikh'];
  public const MARITAL_STATUS = ['Single', 'Divorced', 'Widowed', 'Separated'];

  public const TOUNGES = ['Urdu', 'English', 'Punjabi', 'Sindhi', 'Hindi'];

  public const COUNTRIES = ['Pakistan', 'India', 'United Arab Emirates', 'United States', 'United Kingdom', 'Canade', 'Australia'];

  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->personal_name = $args['personal_name'] ?? '';
    $this->personal_gender = $args['personal_gender'] ?? '';
    $this->personal_age = $args['personal_age'] ?? '';
    $this->personal_height = $args['personal_height'] ?? '';
    $this->personal_religion = $args['personal_religion'] ?? '';
    $this->personal_caste = $args['personal_caste'] ?? '';
    $this->personal_marital = $args['personal_marital'] ?? '';
    $this->personal_tounge = $args['personal_tounge'] ?? '';
    $this->personal_occupation = $args['personal_occupation'] ?? '';
    $this->personal_ann_income = $args['personal_ann_income'] ?? '';
    $this->personal_country = $args['personal_country'] ?? '';
    $this->personal_city = $args['personal_city'] ?? '';
    $this->personal_about = $args['personal_about'] ?? '';
    $this->personal_image = $args['personal_image'] ?? '';
    $this->personal_image = $args['edu_HE'] ?? '';
    $this->edu_PG = $args['edu_PG'] ?? '';
    $this->edu_PG_coll = $args['edu_PG_coll'] ?? '';
    $this->edu_UG_deg = $args['edu_UG_deg'] ?? '';
    $this->edu_School = $args['edu_School'] ?? '';
    $this->family_mother = $args['family_mother'] ?? '';
    $this->family_father = $args['family_father'] ?? '';
    $this->family_sisters = $args['family_sisters'] ?? '';
    $this->family_brothers = $args['family_brothers'] ?? '';
    $this->family_income = $args['family_income'] ?? '';
    $this->family_stay = $args['family_stay'] ?? '';
    $this->family_value = $args['family_value'] ?? '';
    $this->lifestyle_appearance = $args['lifestyle_appearance'] ?? '';
    $this->lifestyle_assets = $args['lifestyle_assets'] ?? '';
    $this->lifestyle_habits = $args['lifestyle_habits'] ?? '';
    $this->lifestyle_language = $args['lifestyle_language'] ?? '';
    $this->lifestyle_bloodgroup = $args['lifestyle_bloodgroup'] ?? '';
    $this->lifestyle_stay = $args['lifestyle_stay'] ?? '';
    $this->partner_age = $args['partner_age'] ?? '';
    $this->partner_height = $args['partner_height'] ?? '';
    $this->partner_marital = $args['partner_marital'] ?? '';
    $this->partner_religion = $args['partner_religion'] ?? '';
    $this->partner_caste = $args['partner_caste'] ?? '';
    $this->partner_edu = $args['partner_edu'] ?? '';
    $this->partner_occupation = $args['partner_occupation'] ?? '';
    $this->partner_income = $args['partner_income'] ?? '';

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

  public function name() {
    return "{$this->brand} {$this->model} {$this->year}";
  }

  public function profile_main_detail() {
    return "{$this->personal_age} year, {$this->personal_height}. {$this->personal_gender}, {$this->personal_religion}, {$this->personal_caste}, {$this->personal_city} {$this->personal_country}.";
  }

  public function weight_kg() {
    return number_format($this->weight_kg, 2) . ' kg';
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return number_format($weight_lbs, 2) . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  public function condition() {
    if($this->condition_id > 0) {
      return self::CONDITION_OPTIONS[$this->condition_id];
    } else {
      return "Unknown";
    }
  }

  // protected function validate() {
  //   $this->errors = [];

  //   if(is_blank($this->personal_gender)) {
  //     $this->errors[] = "Gender cannot be blank.";
  //   }
  //   if(is_blank($this->personal_age)) {
  //     $this->errors[] = "Age cannot be blank.";
  //   }
  //    if(is_blank($this->personal_height)) {
  //     $this->errors[] = "Height cannot be blank.";
  //   }
  //    if(is_blank($this->personal_religion)) {
  //     $this->errors[] = "Religion cannot be blank.";
  //   }
  //    if(is_blank($this->personal_caste)) {
  //     $this->errors[] = "Caste cannot be blank.";
  //   }
  //    if(is_blank($this->personal_marital)) {
  //     $this->errors[] = "Marital Status cannot be blank.";
  //   }
  //    if(is_blank($this->personal_tounge)) {
  //     $this->errors[] = "Tounge Field cannot be blank.";
  //   }
  //   if(is_blank($this->personal_occupation)) {
  //     $this->errors[] = "Occupation cannot be blank.";
  //   }
  //   if(is_blank($this->personal_country)) {
  //     $this->errors[] = "Country cannot be blank.";
  //   }
  //   if(is_blank($this->personal_city)) {
  //     $this->errors[] = "City cannot be blank.";
  //   }
  //   if(is_blank($this->edu_HE)) {
  //     $this->errors[] = "Higher Education cannot be blank.";
  //   }
  //   return $this->errors;
  // }


}

?>
