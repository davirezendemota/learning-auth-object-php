<?php include_once "app/includes/server.inc.php" ?>

<h1>Login Page</h1>

<?php
// CURRENT USERNAME & PASSWORD
$cur_us = isset($_POST['username']) ? $_POST['username'] : '';
$cur_pwd = isset($_POST['password']) ? $_POST['password'] : '';

if(!empty($_POST)){
  $Auth = new Auth();
  $Auth->login($_POST['username'], $_POST['password']);
}
?>

<form method="post">
  <input placeholder="username" type="text" name="username" value="<?= $cur_us ?>">
  <input placeholder="password"type="text" name="password" value="<?= $cur_pwd ?>">
  <input type="submit">
</form>

<a href="<?= WWW_ROOT ?>">index page</a>

<?php include_once "app/components/footer.php" ?>