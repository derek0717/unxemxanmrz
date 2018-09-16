<?php
include_once 'config.php';
include_once 'db.php';

$db_table='test01';

$sql = "INSERT INTO {$db_table} (ref, value) VALUES ('John', 'Doe')";

//if ($db_link->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $db_link->error;
//}

include 'index/index.html';
?>
