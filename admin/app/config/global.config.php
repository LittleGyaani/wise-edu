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
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}


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
if(!defined('BASE_PATH'))
    define('BASE_PATH', dirname(__DIR__, 2));

// //Global Define for EMAIL Service
// if  (
//         (!defined('MAIL_PORT'))//Mail PORT
//         && 
//         (!defined('MAIL_HOST'))//Mail HOST
//         && 
//         (!defined('MAIL_USERNAME'))//Mail USERNAME
//         && 
//         (!defined('MAIL_PASSWORD'))//Mail PASSWORD
//     )
// {

//     //Put all values here
//     define('MAIL_PORT', 465);
//     define('MAIL_HOST', 'mail.wiseeducation.in');
//     define('MAIL_USERNAME', 'enquiry@wiseeducation.in');
//     define('MAIL_PASSWORD', 'b#ed5X14');

// }

/* AltoRouter */

include_once BASE_PATH . '/app/router/AltoRouter/AltoRouter.php';

//Make Router Global
global $router, $mail;

// /* PHPMailer */

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// if (!class_exists('PHPMailer\PHPMailer\Exception'))
// {
// require BASE_PATH . '/app/assets/tools/mail/PHPMailer/Exception.php';
// require BASE_PATH . '/app/assets/tools/mail/PHPMailer/PHPMailer.php';
// require BASE_PATH . '/app/assets/tools/mail/PHPMailer/SMTP.php';
// }

// if((!function_exists('sendEnquiryMail')) && (!function_exists('sendEnquiryMail')))
// {
    
//         function sendEnquiryMail($name, $to, $subject, $message)
//         {
//             //Fireup PHPMailer
//             try {

//                 $mail = new PHPMailer(true);

//                 //Mail Server Settings
//                 $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//                 $mail->isSMTP();                                            //Send using SMTP
//                 $mail->Host       = MAIL_HOST;                     //Set the SMTP server to send through
//                 $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//                 $mail->Username   = MAIL_USERNAME;                     //SMTP username
//                 $mail->Password   = MAIL_PASSWORD;                               //SMTP password
//                 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//                 $mail->Port       = MAIL_PORT;

//                 //Recipients
//                 $mail->setFrom('enquiry@wiseeducation.in', 'Wise Education Enquiry');
//                 $mail->addAddress($to, $name);     //Add a recipient
//                 $mail->addAddress('enquiry@wiseeducation.in');               //Name is optional
//                 $mail->addReplyTo('enquiry@wiseeducation.in', 'Wise Education Enquiry');
//                 // $mail->addCC('cc@example.com');
//                 // $mail->addBCC('bcc@example.com');

//                 //Attachments
//                 //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//                 //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//                 //Content
//                 $mail->isHTML(true);                                  //Set email format to HTML
//                 $mail->Subject = 'We have received your ticket. Ticket ID - '. $subject . ' : WISE EDUCATION';
//                 $mail->Body    = $message;
//                 $mail->AltBody = $message;

//                 echo $mail;

//                 $mail->send();

//                 if (!$mail)
//                     echo '0';
//                 else
//                     echo '1';
//             }
//             catch (Exception $e)
//             {

//             //echo "fail";
//             // $globals['emailstatus'] =false;

//             echo "Message could not be sent.";

//             }
//         }

//         function sendTeamMail($teammail, $ticketid, $teammaildata)
//         {
//             //Fireup PHPMailer
//             try {

//                 $mail = new PHPMailer(true);

//                 //Mail Server Settings
//                 $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//                 $mail->isSMTP();                                            //Send using SMTP
//                 $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
//                 $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//                 $mail->Username   = 'user@example.com';                     //SMTP username
//                 $mail->Password   = 'secret';                               //SMTP password
//                 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//                 $mail->Port       = 587;

//                 //Recipients
//                 $mail->setFrom('enquiry@wiseeducation.in', 'Wise Education Enquiry');
//                 $mail->addAddress($teammail, 'WISE EDUCATION ENQUIRY');     //Add a recipient
//                 //$mail->addAddress('enquiry@wiseeducation.in');               //Name is optional
//                 //$mail->addReplyTo('enquiry@wiseeducation.in', 'Wise Education Enquiry');
//                 // $mail->addCC('cc@example.com');
//                 // $mail->addBCC('bcc@example.com');

//                 //Attachments
//                 //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//                 //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//                 //Content
//                 $mail->isHTML(true);                                  //Set email format to HTML
//                 $mail->Subject = 'A new enquiry has been received. Ticket'. $ticketid;
//                 $mail->Body    = $teammaildata;
//                 $mail->AltBody = $teammaildata;

//                 $mail->send();

//                 if (!$mail)
//                     echo '0';
//                 else
//                     echo '1';
//             } 
//             catch (Exception $e)
//             {

//             //echo "fail";
//             // $globals['emailstatus'] =false;

//             echo "Message could not be sent.";
//             }
//         }
// }

//Initialize AltoRouter
$router = new AltoRouter();

//** Define Base Routes for Services **//

//* Varaible Values * //

//Variable Assigns
$title_constant = "WISE GROUP MANAGEMENT PORTAL";

$server_protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

$server_protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://'; //Set the Protocol

$site_host = $_SERVER["HTTP_HOST"]; //Find the Current Host

$base_API_Endpoint = "/api/web/v1/requests/"; //All API requests are passed here

$site_status = "DEVELOPMENT"; //Current status of the Project | 'DEVELOPMENT' OR 'PRODUCTION'

if ($site_status === 'DEVELOPMENT') //If Site is still under development
{
    if ($site_host === 'localhost') //If the Site Host is localhost
    {
        $base_URI = $server_protocol . 'localhost/wise/admin'; //Local Demo Website
        $router->setBasePath('/wise/admin'); //Local Demo Path
    }
    else
    {
        $base_URI = $server_protocol . 'dev.wiseeducation.in'; //Our Demo Website or Preproduction URL
        $router->setBasePath(''); //Our Demo Website or Preproduction URL
    }
}
else
{
    $base_URI = $server_protocol . 'admin.wiseeducation.in'; //Live Production Website
    $router->setBasePath(''); //Live Production Website
}

//Date & Time
$now = Date('d/m/Y H:i:s');
$current_date = explode(' ',$now)[0];
$current_time = explode(' ',$now)[1];

if(!function_exists('compress')){

    function compress($string)
    {
        // Remove html comments
        $string = preg_replace('/<!--.*-->/', '', $string);

        // Merge multiple spaces into one space
        $string = preg_replace('/\s+/', ' ', $string);

        // Remove space between tags. Skip the following if
        // you want as it will also remove the space 
        // between <span>Hello</span> <span>World</span>.
        return preg_replace('/>\s+</', '><', $string);
    }
}

//Current URL
$current_URI = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . explode('?', "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")[0];

$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $urlArray);
$numSegments = count($segments);
$currentSegment = $segments[$numSegments - 2];

//print_r($segments);

// ob_start('compress');
