<?php

/* Global Configuration */
include BASE_PATH . '/app/config/global.config.php';

//Accept Header
header('Content-Type: application/json; charset=utf-8');

/* Global Declarations for API */
$status = '';//Type Boolean
$response = '';//Type String
$code = '';//Type Integer
$msg = '';//Type String
$resp = array();//Type Array

// print_r($_POST);

// echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    //Set Response
    $status = false;
    $response = 'Undefined';
    $code = 405;
    $msg = 'Method Not Allowed';
}
else 
{

}

//Prepare JSON Response
$resp[] = array('status' => $status, 'response' => $response, 'code' => $code, 'message' => $msg);

//Send JSON Response back to API Call
echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

//Close MySQL Bridge
$db_conn -> close();