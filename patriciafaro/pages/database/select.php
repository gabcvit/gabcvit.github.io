<?php
require_once('config.php');
require_once('functions.php');

$tableData = "";

$link = f_sqlConnect(DB_USER, DB_PASSWORD, DB_NAME);

$query = sprintf("SELECT id, name, email, country, city, gender FROM user");

$result = mysql_query($query);

// Check result
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}


while ($row = mysql_fetch_assoc($result)) {
    $tableData .= "<tr onclick=\"document.location = 'edit.php?id={$row['id']}' ;\" class='odd gradeX'>";
    $tableData .= "<td> {$row['name']} </td>";
    $tableData .= "<td> {$row['email']} </td>";
    $tableData .= "<td> {$row['country']} </td>";
    $tableData .= "<td> {$row['city']} </td>";
    $tableData .= "<td> {$row['gender']} </td>";
    $tableData .= "</tr>";
}

mysql_free_result($result);

mysql_close();
?>
