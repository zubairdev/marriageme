<?php

class Admin extends DatabaseObject {

  static protected $table_name = "user";
  static protected $db_columns = ['id', 'profile_for', 'name', 'gender', 'dob', 'religion', 'phone', 'email', 'password', 'term_cond'];

  public $id;
  public $profile_for;
  public $name;
  public $gender;
  public $dob;
  public $religion;
  public $phone;
  public $email;
  public $password;
  protected $hashed_password;
  protected $password_required = true;

  public function __construct($args=[]) {
    $this->profile_for = $args['profile_for'] ?? '';
    $this->name = $args['name'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->dob = $args['dob'] ?? '';
    $this->religion = $args['religion'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->term_cond = $args['term_cond'] ?? '';
  }

  public function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

  protected function set_hashed_password() {
    $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
  }

  public function verify_password($password) {
    return password_verify($password, $this->hashed_password);
  }

  protected function create() {
    $this->set_hashed_password();
    return parent::create();
  }

  protected function update() {
    if($this->password != '') {
      $this->set_hashed_password();
      // validate password
    } else {
      // password not being updated, skip hashing and validation
      $this->password_required = false;
    }
    return parent::update();
  }

  protected function validate() {
    $this->errors = [];

    if(is_blank($this->profile_for)) {
      $this->errors[] = "Must choose for whome you are creating profile?";
    }

    if(is_blank($this->name)) {
      $this->errors[] = "Name cannot be blank.";
    } elseif (!has_length($this->name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "Name must be between 2 and 255 characters.";
    }

    if(is_blank($this->dob)) {
      $this->errors[] = "DOB cannot be blank.";
    }

    if(is_blank($this->phone)) {
      $this->errors[] = "Phone cannot be blank.";
    }

    if(is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_length($this->email, array('max' => 255))) {
      $this->errors[] = "Last name must be less than 255 characters.";
    } elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be a valid format.";
    }

    if($this->password_required) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 12))) {
        $this->errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 symbol";
      }

    }

    return $this->errors;
  }

  static public function find_by_email($email) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE email='" . self::$database->escape_string($email) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

}

?>
