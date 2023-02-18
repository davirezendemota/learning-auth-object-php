<?php include_once "app/includes/server.inc.php" ?>

<?php
$Auth = new Auth();
$Auth->authenticate();
?>

<h1>Admin</h1>
<a href="<?= WWW_ROOT ?>">index page</a>
<br>
<a href="?auth=logout">logout</a>

<?php include_once "app/components/footer.php" ?>