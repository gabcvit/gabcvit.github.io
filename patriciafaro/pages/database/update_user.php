<?php
require_once('config.php');
require_once('functions.php');

$link = f_sqlConnect(DB_USER, DB_PASSWORD, DB_NAME);

$query = sprintf("UPDATE user SET name='%s', email='%s', country='%s', city='%s', gender='%s', course_1='%d', course_2='%d', course_3='%d', course_4='%d', course_5='%d', course_6='%d', course_7='%d', course_8='%d', course_9='%d', course_10='%d', course_11='%d', course_12='%d', course_13='%d', course_14='%d', course_15='%d', course_16='%d', course_17='%d' WHERE ID='%d'",
	$_POST['name'],$_POST['email'],$_POST['country'],$_POST['city'],$_POST['gender'],$_POST['course_1'],$_POST['course_2'],$_POST['course_3'],$_POST['course_4'],$_POST['course_5'],$_POST['course_6'],$_POST['course_7'],$_POST['course_8'],$_POST['course_9'],$_POST['course_10'],$_POST['course_11'],$_POST['course_12'],$_POST['course_13'],$_POST['course_14'],$_POST['course_15'],$_POST['course_16'],$_POST['course_17'],$_POST['id']);

mysql_query($query);

mysql_close();

header("Location: ../search.php"); /* Redirect browser */
exit();


?>