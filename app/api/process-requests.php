<?php

/* Global Configuration */
include BASE_PATH . '/app/config/global.config.php';

// print_r($_POST);
// print_r($_GET);

//Accept Header
header('Content-Type: application/json; charset=utf-8');

/* Global Declarations for API */
$status = '';//Type Boolean
$response = '';//Type String
$code = '';//Type Integer
$msg = '';//Type String
$resp = array();//Type Array

//Form Specific
$req = '';
$fullname = '';
$email = '';
$phone = '';
$message ='';
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

    //Check Request Type
    if($req === 'ge')
    {

        //Prepare Details for Team Mail
        $ticketid = 'ENQ-'.date('dmyHis');
        $teammaildata =
            '<b>Please note the details below</b> <br/>' .         
            'Name: ' . $fullname . '<br />' .
            'Email: ' . $email . '<br />' .
            'Phone: ' . $phone . '<br />' .
            'Enquriy Category: ' . strtoupper(str_replace('','',$enquiry)) . '<br />' .
            'Message: ' . $message . '<br />';

        $enquirymaildata = '
        <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Revue</title>
                <style type="text/css">
                    #outlook a {padding:0;}
                    body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;} 
                    .ExternalClass {width:100%;}
                    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div, .ExternalClass blockquote {line-height: 100%;}
                    .ExternalClass p, .ExternalClass blockquote {margin-bottom: 0; margin: 0;}
                    #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
                    
                    img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;} 
                    a img {border:none;} 
                    .image_fix {display:block;}

                    p {margin: 1em 0;}

                    h1, h2, h3, h4, h5, h6 {color: black !important;}
                    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: black;}
                    h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {color: black;}
                    h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited {color: black;}

                    table td {border-collapse: collapse;}
                    table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

                    a {color: #3498db;}
                    p.domain a{color: black;}

                    hr {border: 0; background-color: #d8d8d8; margin: 0; margin-bottom: 0; height: 1px;}

                    @media (max-device-width: 667px) {
                    a[href^="tel"], a[href^="sms"] {
                        text-decoration: none;
                        color: blue;
                        pointer-events: none;
                        cursor: default;
                    }

                    .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                        text-decoration: default;
                        color: orange !important;
                        pointer-events: auto;
                        cursor: default;
                    }

                    h1[class="profile-name"], h1[class="profile-name"] a {
                        font-size: 32px !important;
                        line-height: 38px !important;
                        margin-bottom: 14px !important;
                    }

                    span[class="issue-date"], span[class="issue-date"] a {
                        font-size: 14px !important;
                        line-height: 22px !important;
                    }

                    td[class="description-before"] {
                        padding-bottom: 28px !important;
                    }
                    td[class="description"] {
                        padding-bottom: 14px !important;
                    }
                    td[class="description"] span, span[class="item-text"], span[class="item-text"] span {
                        font-size: 16px !important;
                        line-height: 24px !important;
                    }

                    span[class="item-link-title"] {
                        font-size: 18px !important;
                        line-height: 24px !important;
                    }

                    span[class="item-header"] {
                        font-size: 22px !important;
                    }

                    span[class="item-link-description"], span[class="item-link-description"] span {
                        font-size: 14px !important;
                        line-height: 22px !important;
                    }

                    .link-image {
                        width: 84px !important;
                        height: 84px !important;
                    }

                    .link-image img {
                        max-width: 100% !important;
                        max-height: 100% !important;
                    }
                    }

                    @media (max-width: 500px) {
                    .column {
                        display: block !important;
                        width: 100% !important;
                        padding-bottom: 8px !important;
                    }
                    }

                    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
                    a[href^="tel"], a[href^="sms"] {
                        text-decoration: none;
                        color: blue;
                        pointer-events: none;
                        cursor: default;
                    }

                    .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                        text-decoration: default;
                        color: orange !important;
                        pointer-events: auto;
                        cursor: default;
                    }
                    }
                </style>
                <!--[if gte mso 9]>
                    <style type="text/css">
                    #contentTable {
                        width: 600px;
                    }
                    </style>
                <![endif]-->
            </head>
            <body style="width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; margin-top: 0; margin-bottom: 0; margin-right: 0; margin-left: 0; padding-top: 0; padding-bottom: 0; padding-right: 0; padding-left: 0;">
  <table
    cellpadding="0"
    cellspacing="0"
    border="0"
    id="backgroundTable"
    style="margin: 0; padding: 0; width: 100% !important; line-height: 100% !important; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9fafb;"
    width="100%"
  >
    <tbody>
      <tr>
        <td width="10" valign="top">&nbsp;</td>
        <td valign="top" align="center">
          <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="background-color: #FFF; border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;">
        <tr>
          <td>
      <![endif]-->
          <table cellpadding="0" cellspacing="0" border="0" align="center" style="width: 100%; max-width: 600px; background-color: #fff; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" id="contentTable">
            <tbody>
              <tr>
                <td width="600" valign="top" align="center" style="border-collapse: collapse;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="background: #f9fafb;" width="100%">
                    <tbody>
                      <tr>
                        <td align="center" valign="top">
                          <div style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px;">&nbsp;</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #e0e4e8;" width="100%">
                    <tbody>
                      <tr>
                        <td align="center" style="padding: 56px 56px 28px 56px;" valign="top">
                          <a
                            style="color: #3498db; text-decoration: none;"
                            href="https://www.getrevue.co/profile/brightonsmith?utm_campaign=Subscription+confirmation&amp;utm_content=profile-image&amp;utm_medium=email&amp;utm_source=confirmation"
                            target="_blank"
                          >
                            <img style="width: 56px; height: 56px; border: 0;" alt="Weekly newsletter of CyanVariable360 Studios" src="https://s3.amazonaws.com/revue/profiles/images/000/038/642/small/photo.png?1530276206" />
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" style="padding: 0 56px 28px 56px;" valign="top">
                          <div style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px; font-size: 18px; color: #333; font-weight: bold;">
                            Thank you for subscribing to <strong>Weekly newsletter of CyanVariable360 Studios</strong>!
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" style="padding: 0 56px 28px 56px;" valign="top">
                          <div style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px; font-size: 18px; color: #333;">
                            You will receive updates straight to your inbox, but you can also check out the <a target="_blank" href="https://www.getrevue.co/profile/brightonsmith">profile page</a> for past and future issues. Curious what
                            the last issue was about? Read it <a target="_blank" href="https://www.getrevue.co/profile/brightonsmith/issues/weekly-newsletter-of-cyan-variable360-studios-issue-1-121395">here</a>!
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" style="padding: 0 56px 56px 56px;" valign="top">
                          <div style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px; font-size: 18px; color: #333;">
                            Oh by the way, I wouldn\'t mind if you gave my digest some love through
                            <a
                              target="_blank"
                              href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.getrevue.co%2Fprofile%2Fbrightonsmith&amp;text=Join%20me%20in%20following%20this%20newsletter%3F%20%F0%9F%91%80%20Weekly%20newsletter%20of%20CyanVariable360%20Studios&amp;original_referer=&amp;related=revue&amp;via=revue"
                            >
                              Twitter
                            </a>
                            or
                            <a
                              target="_blank"
                              href="https://m.facebook.com/login.php?skip_api_login=1&amp;api_key=966242223397117&amp;signed_next=1&amp;next=http%3A%2F%2Fm.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Fwww.getrevue.co%252Fprofile%252Fbrightonsmith&amp;cancel_url=http%3A%2F%2Fm.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&amp;display=touch&amp;locale=en_US&amp;_rdr"
                            >
                              Facebook
                            </a>
                            :-)
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" bgcolor="#F9FAFB" style="padding: 28px 56px;" valign="top">
                          <div style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px; font-size: 16px; color: #666666; font-weight: 900;">Invite your friends to subscribe:</div>
                          <div style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px; font-size: 16px; color: #000;">
                            <a
                              style="color: #55acee;"
                              target="_blank"
                              href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.getrevue.co%2Fprofile%2Fbrightonsmith&amp;text=Join%20me%20in%20following%20this%20newsletter%3F%20%F0%9F%91%80&amp;original_referer=&amp;related=revue&amp;via=revue"
                            >
                              Invite via Twitter
                            </a>
                            &nbsp;&nbsp;
                            <a
                              style="color: #3b5998;"
                              target="_blank"
                              href="https://m.facebook.com/login.php?skip_api_login=1&amp;api_key=966242223397117&amp;signed_next=1&amp;next=http%3A%2F%2Fm.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Fwww.getrevue.co%252Fprofile%252Fbrightonsmith&amp;cancel_url=http%3A%2F%2Fm.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&amp;display=touch&amp;locale=en_US&amp;_rdr"
                            >
                              Invite via Facebook
                            </a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="background: #f9fafb;" width="100%">
                    <tbody>
                      <tr>
                        <td align="center" style="padding: 28px 56px;" valign="top">
                          <div style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px; font-size: 16px; line-height: 24px; color: #a7adb5;">
                            Make sure you add this email address (cyanvariable360-studios@getrevue.co) to your address book. This way you won\'t miss a single newsletter.
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="padding: 0 56px 28px 56px;" valign="middle">
                          <span style="font-family: "lato", "Helvetica Neue", Helvetica, Arial, sans-serif; line-height: 28px; font-size: 16px; color: #a7adb5; vertical-align: middle;">Powered by</span>
                          &nbsp;
                          <a style="border: 0;" href="https://www.getrevue.co/?utm_campaign=Subscription+welcome&amp;utm_content=logo&amp;utm_medium=email&amp;utm_source=confirmation" target="_blank">
                            <img alt="Revue" width="70" height="28" style="vertical-align: middle;" src="https://www.getrevue.co/assets/email/revue_gray-99f4cab9d76e074438c58f6055605e4d45773b72dc55dd8b8305b0634fc4f381.png" />
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
      </table>
      <![endif]-->
        </td>
        <td width="10" valign="top">&nbsp;</td>
      </tr>
    </tbody>
  </table>
</body>
<html/>';

        //Send Team Mail
        sendTeamMail($teamemail, $ticketid, $teammaildata);

        //Send Enquiry Mail
        sendEnquiryMail($fullname, $email, $ticketid, $enquirymaildata);

    }
    else if ($req === 'ge')
    {

    }
    else
    {

    }

}

//Prepare JSON Response
$resp[] = array('status' => $status, 'response' => $response, 'code' => $code, 'message' => $msg);

//Send JSON Response back to API Call
echo json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

//Close MySQL Bridge
$db_conn -> close();