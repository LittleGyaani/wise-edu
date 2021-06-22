<?php

/* Global Configuration */
require BASE_PATH . '/app/config/global.config.php';

header('content-type: application/json');

// echo '<pre>';
// print_r($_POST);
// print_R($_GET);
// exit;

/* GLOBAL DECLARATIONS */

//Parameters
$action = '';
$context = '';
$response = array();
$resp = '';
$status = '';
$msg = '';
$university_id = '';
$university_name = '';
$university_url = '';
$university_website_url = '';
$university_status = '';
$university_popular = '';
$university_new = '';
$university_profile = '';
$university_accomodation = '';
$university_fee_structure = '';
$university_entry_requirement = '';
$university_recognition = '';
$university_type = '';
$university_program_type = '';
$university_course_offered = '';
$university_course_language = '';
$university_course_duration = '';
$university_course_fee = '';
$university_degree_duration = '';

$admin_email = '';
$admin_password = '';

//Receive Values
$action = $_GET['action'];
$context = $_GET['context'];

//University Update Data
$university_id = $_POST['university_id'];
$university_name = $_POST['university_name'];
$university_url = $_POST['university_url'];
$university_website_url = $_POST['university_website_url'];
$university_status = $_POST['university_status'];
$university_popular = $_POST['university_popular'];
$university_new = $_POST['university_new'];
$university_profile = $_POST['university_profile'];
$university_accomodation = $_POST['university_accomodation'];
$university_fee_structure = $_POST['university_fee_structure'];
$university_entry_requirement = $_POST['university_entry_requirement'];
$university_recognition = $_POST['university_recognition'];
$university_type = $_POST['university_type'];
$university_program_type = $_POST['university_program_type'];
$university_course_offered = $_POST['university_course_offered'];
$university_course_language = $_POST['university_course_language'];
$university_course_duration = $_POST['university_course_duration'];
$university_course_fee = $_POST['university_course_fee'];
$university_degree_duration = $_POST['university_degree_duration'];

$admin_email = $db_conn -> real_escape_string($_POST['email']);
$admin_password = $db_conn -> real_escape_string($_POST['password']);

if(($action === 'edit') && ($context === 'university'))
{

    //Set Data for Update
   $university_update_query = "
    UPDATE `we_university_data` 
    SET 
    `we_university_data_university_type`= '" . $university_type . "',
    `we_university_data_program_type`= '" . $university_program_type . "',
    `we_university_data_course_offered`= '" . $university_course_offered . "',
    `we_university_data_course_language`= '" . $university_course_language . "',
    `we_university_data_course_duration`= '" . $university_course_duration . "',
    `we_university_data_course_fee`= '" . $university_course_fee . "',
    `we_university_profile`= '" . $university_profile . "',
    `we_university_degree_duration`= '" . $university_degree_duration . "',
    `we_university_accommodation`= '" . $university_accomodation . "',
    `we_university_fee_structure`= '" . $university_fee_structure . "',
    `we_university_entry_requirement`= '" . $university_entry_requirement . "',
    `we_university_recognition`= '" . $university_recognition . "',
    `we_university_data_updated_at`= '" . $now . "'
    WHERE `we_university_id`= ".$university_id." ";

    $run_university_update_query = $db_conn -> query($university_update_query);

    if($run_university_update_query)
    {
        $status = 200;
        $resp = 'done';
        $msg = 'University data updated successfully.';
    }
    else
    {
        $status = 500;
        $resp = 'error';
        $msg = 'University data not updated.';
    }

} else if (($action === 'login') && ($context === 'admin'))
{

    $validateAdmin = 'SELECT * FROM `we_admin_login` WHERE `we_admin_email` = "'.$admin_email.'" AND `we_admin_password` =  "'.$admin_password.'"';
    $checkValidateAdmin = $db_conn -> query($validateAdmin);
    $getValidatedAdmin = $checkValidateAdmin -> fetch_assoc();
    if($checkValidateAdmin -> num_rows > 0)
    {
        $status = 401;
        $resp = 'authorized';
        $msg = 'Admin login verified.';

        //Set and Start SESSION(s) Globally
        $_SESSION['admin_id'] = $getValidatedAdmin['we_admin_id'];
    }
    else
    {
        $status = 400;
        $resp = 'unauthorized';
        $msg = 'Admin login invalid.';
    }


}
// echo $university_update_query;

//Set the Response
$response = array('status' => $status, 'code' => $resp, 'message' => $msg);

//Send JSON Response Back
echo json_encode($response, JSON_PRETTY_PRINT);

//Close the MySQLi connection bridge
$db_conn -> close();