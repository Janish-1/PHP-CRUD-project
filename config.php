<?php
// Defining the Database details
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'janish');
define('DB_PASSWORD', 'Jp@123456');
define('DB_NAME', 'employee_db');

// Connect to database
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//Check Connection
if($link===false){
    die("ERROR:Could not connect. ".mysqli_connect_error());
}
?>