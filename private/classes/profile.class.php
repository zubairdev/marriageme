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

  public const GENDERS = ['Mens', 'Womens', 'Unisex'];

  public const CONDITION_OPTIONS = [
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];

  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->brand = $args['brand'] ?? '';
    $this->model = $args['model'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->color = $args['color'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->price = $args['price'] ?? 0;
    $this->weight_kg = $args['weight_kg'] ?? 0.0;
    $this->condition_id = $args['condition_id'] ?? 3;

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

  protected function validate() {
    $this->errors = [];

    if(is_blank($this->brand)) {
      $this->errors[] = "Brand cannot be blank.";
    }
    if(is_blank($this->model)) {
      $this->errors[] = "Model cannot be blank.";
    }
    return $this->errors;
  }


}

?>
