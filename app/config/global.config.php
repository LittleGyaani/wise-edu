<?php
//Global Configuration File

//**This is global configuration file which contains all the necessary php scripts and headers and required variables**//
//** to be used in different files and will be called back in header file.**//

//Errors and notices
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);//E_ALL
//error_reporting(0);//Hide All errors

//Enable gzip Compression
if (!in_array('ob_gzhandler', ob_list_handlers()))
{
    ob_start('ob_gzhandler');
}
else
{
    ob_start();
}

//Including the DB file
include_once 'db.config.php';

//Declaring default Date and Time Zone for Date Time Stamps
date_default_timezone_set('Asia/Kolkata');

//Allow Cross Access from Origin
header("Access-Control-Allow-Origin: *");

//Initialize the global session
if(!isset($_SESSION))
    session_start();

/* Global Declarations */
$title_constant = "";
$base_URI = "";
$base_API_Endpoint = "";
$site_status = ""; // PRODUCTION or DEVELOPMENT
$now = "";
$server_protocol = ""; ///HTTP or HTTPS
$site_host = ""; //localhost or live

//Define BASE DIRECTORY
define('BASE_PATH', dirname(__DIR__, 2));

/* AltoRouter */
include_once BASE_PATH . '/app/assets/router/AltoRouter/AltoRouter.php';

//Make Router Global
global $router;

//Initialize AltoRouter
$router = new AltoRouter();

//** Define Base Routes for Services **//

//* Varaible Values * //

//Variable Assigns
$title_constant = "Travel the World!";

$server_protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

$server_protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://'; //Set the Protocol

$site_host = $_SERVER["HTTP_HOST"]; //Find the Current Host

$base_API_Endpoint = "/api/web/v1/requests/"; //All API requests are passed here

$site_status = "DEVELOPMENT"; //Current status of the Project | 'DEVELOPMENT' OR 'PRODUCTION'

if ($site_status === 'DEVELOPMENT') //If Site is still under development
{
    if ($site_host === 'localhost') //If the Site Host is localhost
    {
        $base_URI = $server_protocol . 'localhost/wise'; //Local Demo Website
        $router->setBasePath('/wise'); //Local Demo Path
    }
    else
    {
        $base_URI = $server_protocol . 'demo.kslabs.online/demo/drafticode'; //Our Demo Website or Preproduction URL
        $router->setBasePath('/demo/drafticode'); //Our Demo Website or Preproduction URL
    }
}
else
{
    $base_URI = $server_protocol . 'wiseeducation.in'; //Live Production Website
    $router->setBasePath('/'); //Live Production Website
}

//Date & Time
$now = Date('d/m/Y H:i:s');
$current_date = explode(' ',$now)[0];
$current_time = explode(' ',$now)[1];

