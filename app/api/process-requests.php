<?php

/* Global Configuration */
include BASE_PATH . '/app/config/global.config.php';

// print_r($_POST);
// print_r($_GET);

//Accept Header
header('Content-Type: application/json; charset=utf-8');

/* Global Declarations for API */
$status = ''; //Type Boolean
$response = ''; //Type String
$code = ''; //Type Integer
$msg = ''; //Type String
$resp = array(); //Type Array

//Form Specific
$req = '';
$fullname = '';
$email = '';
$phone = '';
$message = '';
$enquiry = '';
$teamemail = '';
$ticketid = '';


//Receive Form Params
$req = $_GET['req'];
$fullname = $_POST['full-name'];
$email = $_POST['email-address'];
$phone = $_POST['phone-number'];
$message = $_POST['message-details'];
$enquiry = $_POST['enquiry-type'];

//Static Params
$teamemail = 'enquiry@wiseeducation.in';

// print_r($_POST);

// echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  //Set Response
  $status = false;
  $response = 'Undefined';
  $code = 405;
  $msg = 'Method Not Allowed';
} else {

  //Check Request Type
  if ($req === 'ge') {

    //Prepare Details for Team Mail
    $ticketid = 'ENQ-' . date('dmyHis');
    $teammaildata =
      '<b>Dear Team, <br/> Please note the details below:</b> <br/>' .
      'Name: ' . $fullname . '<br />' .
      'Email: ' . $email . '<br />' .
      'Phone: ' . $phone . '<br />' .
      'Enquriy Category: ' . strtoupper(str_replace('', '', $enquiry)) . '<br />' .
      'Message: ' . $message . '<br />
            Enquiry Received from <b>CONTACT US PAGE.</b>
            ';

    $enquirymaildata =
      '
          <center>
              <a href="' . $base_URI . '">
                <img 
                  class="top-image" src="' . $base_URI . '/app/assets/img/logos/wise-education-logo.png" 
                  style="line-height: 1; width: 250px;" 
                  alt="' . $title_constant . '" 
                />
              </a>
          </center>
          We have received your requests, please note the details below you shared with us :</b> <br />' .
      '<br />' .
      'Name: ' . $fullname . '<br />' .
      'Email: ' . $email . '<br />' .
      'Phone: ' . $phone . '<br />' .
      'Enquriy Category: ' . strtoupper(str_replace('', '', $enquiry)) . '<br />' .
      'Message: ' . $message . '<br />
          <strong>Someone from the team will soon be in touch with you to assist.</strong> <br />
          <br />
          <br />
            <center>
                Please take some time to stay connected with us :
                <div class="scoail__media">
                  <a href="https://www.facebook.com/wiseeducation" target="_blank"><img src="https://cdn1.iconfinder.com/data/icons/social-media-2285/512/Colored_Facebook3_svg-512.png" height="25" width="25" alt="" /></a>
                  <a href="https://twitter.com/wiseeducationg2" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter3_colored_svg-512.png" height="25" width="25" alt="" /></a>
                  <a href="https://instagram.com/gwiseeducation/" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-128.png" height="25" width="25" alt="" /></a>
                  <a href="https://www.youtube.com/channel/UC1OlVHFElQ0HTvmXIkaZ28g" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Youtube_colored_svg-128.png" height="25" width="25" alt="" /></a>
                  <br />
                  <br />
                  <strong>For any query</strong>
                  <br />
                  <span>Locate us: Plot No. - 191/A, Kharavela Nagar, Unit-3, Bhubaneswar, Odisha, 751001 India <br />
                    <small style="color:red;"><strong>(Due to COVID-19 office might not be operational, please confirm before visiting.)</strong></small></span> <br />
                  <span>Call us: <a href="tel:+919439937117">+91 9439 937 117</a> / <a href="tel:+380636908318">+38 0636 908 318</a></span> <br />
                  <span>Office hours: 09:00AM - 09:00PM (IST/GMT+5:30, MON-SAT)</span> <br />
                  <span>Email us: <a href="mailto:enquiry@wiseeducation.in">enquiry@wiseeducation.in</a></span> <br />
                  <br />
                  Copyright (c) ' . date('Y') . ' <a href="' . $base_URI . '" title="' . $title_constant . '">WISE EDUCATION.</a> All rights reserved.
                  <p>Beautifully Crafted with <img src="https://media.tenor.com/images/b9f2aad13ff9b29935674e8cefcea344/tenor.gif" height="15" width="15" /> by <a class="ft-lnk" href="https://wa.me/919853233951?text=I got your Contact from Wise Education Group Official Website" target="_blank" aria-label="Ping BRAHMA a.k.a Little Gyaani on WhatsApp" data-microtip-position="top" role="tooltip"><b>Little Gyaani</b></a>.</p>
              </center>
            ';

    if (
      //Send Team Mail
      sendTeamMail($teamemail, $ticketid, $teammaildata)
      &&
      //Send Enquiry Mail
      sendEnquiryMail($fullname, $email, $ticketid, $enquirymaildata)
    ) {

      //Set Response
      $status = true;
      $response = 'Success';
      $code = 100;
      $msg = 'Enquiry Sent Successfully';
    }
  } else if ($req === 'qc') {
  } else {
  }
}

//Prepare JSON Response
$resp[] = array('status' => $status, 'response' => $response, 'code' => $code, 'message' => $msg);

//Send JSON Response back to API Call
echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

//Close MySQL Bridge
$db_conn->close();
