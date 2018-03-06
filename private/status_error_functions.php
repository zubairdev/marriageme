<?php

function require_login() {
  global $session;
  if(!$session->is_logged_in()) {
    redirect_to(url_for('/login.php'));
  } else {
    // Do nothing, let the rest of the page proceed
  }
}

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div style=\"width:100%; background-color:#f3dede;\">";
    $output .= "<div class=\"errors alert alert-danger container\" style=\"margin-bottom:0;border:none;\" role=\"alert\">";
    $output .= "<h3 style=\"margin-bottom:10px;\">Please fix the following errors:</h3>";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
    $output .= "</div>";
  }

  return $output;
}

function display_session_message() {
  global $session;
  $msg = $session->message();
  if(isset($msg) && $msg != '') {
    $session->clear_message();
    return '<div id="message">' . h($msg) . '</div>';
  }
}

?>
