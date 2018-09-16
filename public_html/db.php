<?php
include_once 'config.php';

// Create connection
// mysqli($host, $user, $pass, $db);
$db_link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($db_link->connect_error) {
    die("Connection failed: " . $db_link->connect_error);
}

// before php 5.2.9
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Connected Successfully.";
}

// Change database to "test"
//mysqli_select_db($db_link,$db_name);

/* print host information */
//printf("Host info: %s\n", $db_link->host_info);

function createTable($name,$fields){

// sql to create table
$sql=<<<'EOT'
CREATE TABLE IF NOT EXISTS test02 (
    uid         INT                  AUTO_INCREMENT PRIMARY KEY,
    subject     VARCHAR (255)        DEFAULT NULL,
    object      VARCHAR (255)        DEFAULT NULL,
    create_time DATETIME             DEFAULT CURRENT_TIMESTAMP
);
EOT;
}

/* close connection */
$db_link->close();
