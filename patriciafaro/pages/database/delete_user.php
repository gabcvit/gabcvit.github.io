<?php
require_once('config.php');
require_once('functions.php');

$link = f_sqlConnect(DB_USER, DB_PASSWORD, DB_NAME);

$query = sprintf("DELETE FROM user WHERE ID='%d'", $_POST['id']);
mysql_query($query);

mysql_close();

header("Location: ../search.php"); /* Redirect browser */
exit();


?>