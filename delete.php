<?php

require_once('private/initialize.php');

// require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('index.php'));
}
$id = $_GET['id'];
$profile = Profile::find_by_id($id);
$session_id = $session->user_id;
if($profile == false) {
  redirect_to(url_for('index.php'));
}

if(is_post_request()) {

  // Delete admin
  $result = $profile->delete();
  if ($result == true) {
    $id = $session_id;
    $user = Admin::find_by_id($id);
    $result = $user->delete();
  }
  
  // $session->message('The admin was deleted successfully.');
  redirect_to(url_for('index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete Admin'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

  <!-- <a class="back-link" href="<?php // echo url_for('/staff/admins/index.php'); ?>">&laquo; Back to List</a> -->

  <div class="admin delete">
    <h1>Delete Account</h1>
    <p>Are you sure you want to delete account? You will not be able login again.</p>
    <p class="item"><?php // echo h($admin->full_name()); ?></p>

    <form action="<?php echo url_for('/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Admin" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
