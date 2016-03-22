<?php
require_once('config.php');
require_once('functions.php');

//print_r($_REQUEST['id']);

$user[] = null;

$link = f_sqlConnect(DB_USER, DB_PASSWORD, DB_NAME);

$query = sprintf("SELECT * FROM user WHERE ID='%d'", $_REQUEST['id']);

$result = mysql_query($query);

while($row = mysql_fetch_assoc($result)){
    $user['name'] = $row['name']; 
    $user['country'] = $row['country']; 
    $user['city'] = $row['city']; 
    $user['gender'] = $row['gender']; 
    $user['email'] = $row['email'];
    $user['course_1'] = $row['course_1']; 
    $user['course_2'] = $row['course_2'];
    $user['course_3'] = $row['course_3'];
    $user['course_4'] = $row['course_4'];
    $user['course_5'] = $row['course_5'];
    $user['course_6'] = $row['course_6'];
    $user['course_7'] = $row['course_7'];
    $user['course_8'] = $row['course_8'];
    $user['course_9'] = $row['course_9'];
    $user['course_10'] = $row['course_10'];
    $user['course_11'] = $row['course_11'];
    $user['course_12'] = $row['course_12'];
    $user['course_13'] = $row['course_13'];
    $user['course_14'] = $row['course_14'];
    $user['course_15'] = $row['course_15'];
    $user['course_16'] = $row['course_16'];
    $user['course_17'] = $row['course_17'];
}

mysql_close();

?>