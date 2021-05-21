<?php
/* Database Configuration File */

//Global Variables
$db_host = '';
$db_username = '';
$db_password = '';
$db_name = '';
$db_conn = '';

//Assigning Variable Values
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'wise_edu_DB';

$db_conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if (!($db_conn))
    echo 'We are unable to connect to the database' . $db_conn->errorno();
