<?php
$server = "your_server_name.database.windows.net";
$database = "your_database_name";
$username = "your_username";
$password = "your_password";

$connectionInfo = array(
    "Database" => $database,
    "Uid" => $username,
    "PWD" => $password
);

$conn = sqlsrv_connect($server, $connectionInfo);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>
