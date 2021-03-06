<?php
ini_set('display_errors',1);
// Define connection as a static variable, to avoid connecting more than once
static $connection;
function db_connect() {

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
        // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'/assets/private/config.ini');
        $connection = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname'], $config['port']);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error();
    }
    return $connection;
}

// Connect to the database
$db = db_connect();

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>