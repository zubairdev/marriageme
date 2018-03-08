<?php
require_once('private/initialize.php');

// Log out the user
if ($session->is_logged_in() !== NULL) {
	$session->logout();
	redirect_to(url_for('index.php'));
}


?>