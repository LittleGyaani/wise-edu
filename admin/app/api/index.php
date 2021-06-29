<?php

/* Global Configuration */
require BASE_PATH . '/app/config/global.config.php';

//Set API Headers
header('content-type: application/json');

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// print_r(json_decode($_POST['tags'],true));
// echo '<pre>';
// print_r($_POST);
// print_r($_GET);
// exit;
// echo $_SERVER['DOCUMENT_ROOT'];

/* GLOBAL DECLARATIONS */

//Parameters
$action = '';
$context = '';
$response = array();
$resp = '';
$status = '';
$msg = '';
$data = '';
$university_id = '';
$university_country_id = '';
$university_location_id = '';
$university_cover_image = '';
$university_logo = '';
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

//Gallery Upload Declarations
$gallery_tags = '';

$admin_email = '';
$admin_password = '';

//Receive Values
$action = trim($_GET['action']);
$context = trim($_GET['context']);

//University Update/Create Data
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

//Additonl DATA for Univeristy Create


//Gallery Upload Data
$gallery_tags = json_decode($_POST['tags'],true)[0];
$gallery_tags = json_decode($gallery_tags['value']);
// print_r($gallery_tags);

if($gallery_tags)
{
    for ($i = 0; $i < sizeof($gallery_tags); $i++)
    {
        $x[] = $gallery_tags[$i]->value;
        // print_r(implode(', ', $x));
    }
}
// // print_r($gallery_tags[0]->value);
// print_r(implode(', ',$x));

// exit;

$admin_email = $db_conn->real_escape_string($_POST['email']);
$admin_password = $db_conn->real_escape_string($_POST['password']);

if (($action === 'edit') && ($context === 'university'))
{
    //University Basic Data
    $university_basic_data_update = '
    UPDATE `we_univeristy_list` SET 
        `we_university_website_url`= "'.$university_website_url.'",
        `we_univeristy_details_updated_at`= "'.$now.'",
        `we_univeristy_status`= "'.$university_status. '",
        `we_univeristy_is_popular`= "' . $university_popular . '",
        `we_univeristy_is_new`= "' . $university_new . '" 
    WHERE `we_univeristy_id`= ' . $university_id . '';

    $run_university_basic_update_query = $db_conn -> query($university_basic_data_update);

    //University Profile Data
    $university_profile_data_update = '
    UPDATE `we_university_data` SET 
    `we_university_data_university_type`= "' . $university_type . '",
    `we_university_data_program_type`= "' . $university_program_type . '",
    `we_university_data_course_offered`= "' . $university_course_offered . '",
    `we_university_data_course_language`= "' . $university_course_language . '",
    `we_university_data_course_duration`= "' . $university_course_duration . '",
    `we_university_data_course_fee`= "' . $university_course_fee . '",
    `we_university_profile`= "' . str_replace('"', "'", $university_profile) . '",
    `we_university_degree_duration`= "' . str_replace('"', "'", $university_degree_duration) . '",
    `we_university_accommodation`= "' . str_replace('"', "'", $university_accomodation) . '",
    `we_university_fee_structure`= "' . str_replace('"', "'", $university_fee_structure) . '",
    `we_university_entry_requirement`= "' . str_replace('"', "'", $university_entry_requirement) . '",
    `we_university_recognition`= "' . str_replace('"', "'", $university_recognition) . '",
    `we_university_data_updated_at`= "' . $now . '"
    WHERE `we_university_id`= ' . $university_id . ' ';

    $run_university_profile_data_update = $db_conn->query($university_profile_data_update);

    if (($run_university_basic_update_query) && ($run_university_profile_data_update)) 
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
}
else if (($action === 'add') && ($context === 'university'))
{

    if
    (
        (!empty($university_name)) 
        && 
        (!empty($university_country_id))
        &&
        (!empty($university_location_id))
        &&
        (!empty($university_course_language))
        &&
        (!empty($university_course_duration))
        &&
        (!empty($university_course_fee))
        &&
        (!empty($university_profile))
        &&
        (!empty($university_degree_duration))
        &&
        (!empty($university_accomodation))
        &&
        (!empty($university_fee_structure))
        &&
        (!empty($university_entry_requirement))
        &&
        (!empty($university_recognition))
    )       
    {

        $university_basic_data = '
        INSERT INTO `we_univeristy_list`
        (
            `we_univeristy_country_id`, 
            `we_univeristy_location_id`, 
            `we_univeristy_name`, 
            `we_univeristy_alias`, 
            `we_university_cover_image`, 
            `we_university_logo`, 
            `we_university_website_url`, 
            `we_univeristy_details_added_at`, 
            `we_univeristy_details_updated_at`, 
            `we_univeristy_details_added_by`, 
            `we_univeristy_status`, 
            `we_univeristy_is_popular`, 
            `we_univeristy_is_new`
        ) 
        VALUES 
        (
            '.$university_country_id.',
            '.$university_location_id.',
            "'.$university_name. '",
            "'.$university_url.'",
            "",
            "",
            "'.$university_website_url.'",,
            "'.$now.'",
            "'.$now.'",
            "1",
            "'.$university_status.'",
            "'.$university_popular.'",
            "'.$university_new.'",
        )'; 
        
        $insert_university_basic_data = $db_conn -> query($university_basic_data);

        $univesity_insert_id = $insert_university_basic_data -> last_id;

        $university_profile_data = '
        INSERT INTO `we_university_data`
        (
            `we_university_id`, 
            `we_university_data_university_type`, 
            `we_university_data_program_type`, 
            `we_university_data_course_offered`, 
            `we_university_data_course_language`, 
            `we_university_data_course_duration`, 
            `we_university_data_course_fee`, 
            `we_university_profile`, 
            `we_university_degree_duration`, 
            `we_university_accommodation`, 
            `we_university_fee_structure`, 
            `we_university_entry_requirement`, 
            `we_university_recognition`, 
            `we_university_data_added_at`, 
            `we_university_data_updated_at`, 
            `we_university_data_added_by`, 
            `we_university_data_status`
        ) 
        VALUES 
        (
            '. $univesity_insert_id.',
            "'.$university_type.'",
            "'.$university_program_type.'",
            "'.$university_course_offered.'",
            "'.$university_course_language.'",
            "'.$university_course_duration.'",
            "'.$university_course_fee.'",
            "'.$university_profile.'",
            "'.$university_degree_duration.'",
            "'.$university_accomodation.'",
            "'.$university_fee_structure.'",
            "'.$university_entry_requirement.'",
            "'.$university_recognition.'",
            "'.$now.'",
            "'.$now.'",
            "1",
            "1"
        )';

        $insert_university_profile_data = $db_conn -> query($university_profile_data);
        
        if(($insert_university_basic_data) && ($insert_university_profile_data) )
        {
            $status = 200;
            $resp = 'success';
            $msg = 'University created successfully.';
        }
        else
        {
            $status = 500;
            $resp = 'error';
            $msg = 'Unable to create University.';
        }

    }
    else
    {
        $status = 500;
        $resp = 'error';
        $msg = 'Please fill-up all fields marked (*), are mandatory.';
    }
    
} 
else if (($action === 'login') && ($context === 'admin')) 
{

    $validateAdmin = 'SELECT * FROM `we_admin_login` WHERE `we_admin_email` = "' . $admin_email . '" AND `we_admin_password` =  "' . $admin_password . '"';
    $checkValidateAdmin = $db_conn->query($validateAdmin);
    $getValidatedAdmin = $checkValidateAdmin->fetch_assoc();

    if ($checkValidateAdmin->num_rows > 0)
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
else if (($action == 'upload') && ($context == 'gallery')) 
{

    if (!empty($_FILES['file']['name']))
    {

        $file_name = "";
    
        $totalFile = count($_FILES['file']['name']);

        for ($i = 0; $i < $totalFile; $i++) 
        {

            $fileName = $_FILES['file']['name'][$i];
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowExtn = array('png', 'jpeg', 'jpg');

            if (in_array($extension, $allowExtn))
            {
                // $newName = $fileName . "." . $extension;
                $uploadFilePath = $_SERVER['DOCUMENT_ROOT'] . "/wise/app/uploads/gallery/" . $fileName;
                move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadFilePath);
                $file_name .= json_encode($fileName);
                // $y[] = array($file_name); 
            }
            $insert_gallery = "
            INSERT INTO `we_gallery`
            (
                `we_gallery_file_name`, 
                `we_gallery_filters`, 
                `we_gallery_created_at`, 
                `we_gallery_updated_at`, 
                `we_gallery_added_by`, 
                `we_gallery_status`
            ) 
                VALUES 
                (
                    '" . $file_name . "',
                    '" . implode(', ', $x) . "',
                    '".$now."',
                    '".$now."',
                    1,
                    1
                )";
        }
        //Insert Into Gallery
        if ($db_conn->query($insert_gallery)) 
        {
            $status = 200;
            $resp = 'success';
            $msg = 'Gallery created successfully.';
        } 
        else 
        {
            $status = 400;
            $resp = 'error';
            $msg = 'Unable to create Gallery.';
        }
    }
    // echo $university_update_query;
} 
else if (($action == 'update') && ($context == 'university-cover')) 
{
    // echo 'hi';exit;
    if ($_FILES["file"]["name"] != '') 
    {
        $file_name = explode('.', $_FILES["file"]["name"]);
        $ext = end($file_name);
        $new_file_name = strtolower(str_replace(' ', '-', $_POST['uname']). '-cover' . '.' . $ext);
        $uploadFilePath = $_SERVER['DOCUMENT_ROOT'] . "/wise/app/assets/img/universities/" . $new_file_name;
        // $location = $uploadFilePath . ;
        move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFilePath);
        
        $update_cover_photo = $db_conn -> query("UPDATE `we_univeristy_list` SET `we_university_cover_image`='". $new_file_name. "' WHERE `we_univeristy_id` = '".$_POST['uid']."' ");
        if($update_cover_photo)
        {
            $status = 200;
            $resp = 'success';
            $msg = 'University Cover photo updated successfully.';
        }
        else 
        {
            $status = 400;
            $resp = 'error';
            $msg = 'Unable to update University Cover photo.';
        }
    }
}
else if (($action == 'fetch') && ($context == 'tags')) 
{
    $x = $db_conn->query("SELECT GROUP_CONCAT(DISTINCT `we_gallery_filters` SEPARATOR ' , ') AS `tags` FROM `we_gallery` WHERE `we_gallery_status` = 1");
    $y = $x->fetch_assoc();
    // while ($y = $x->fetch_assoc())
        // $z['tags'][] = ($y['we_gallery_filters']);
        // print_r(array_unique(explode(",", $y['tags'])));exit;
        // print_r(implode(', ',array_unique(explode(",", str_replace(', ', ',', str_replace(' ,', ',', $y))['tags']))));exit;
        $unique_tags = implode(', ', array_unique(explode(",", str_replace(', ', ',', str_replace(' ,', ',', $y))['tags'])));
        // print_r(str_replace(' ,',',',$y));exit;
    if ($unique_tags) 
    {
        $status = 200;
        $resp = 'success';
        $msg = 'Gallery tags fetched.';
        $data = $unique_tags;
    } 
    // $m = json_encode($z);
    // print_r($unique_tags);
    // exit;
}
else if (($action == 'add') && ($context == 'faq')) 
{
    foreach($_POST['faqQS'] as $fid => $fval)
    {
        $insert_faqs = $db_conn -> query ("INSERT INTO `we_faq_list`
        (
            `we_faq_question`, 
            `we_faq_answer`, 
            `we_faq_priority`, 
            `we_faq_added_at`, 
            `we_faq_updated_at`, 
            `we_faq_added_by`, 
            `we_faq_status`
        ) 
        VALUES 
        (
            '". $_POST['faqQS'][$fid] . "',
            '" . $_POST['faqAS'][$fid] . "',
            0,
            '".$now. "',
            '" . $now . "',
            1,
            1
        )");
    }
    if($insert_faqs)
    {
        $status = 200;
        $resp = 'success';
        $msg = 'FAQs inserted successfully.';
    }
    else
    {
        $status = 400;
        $resp = 'error';
        $msg = 'FAQs not inserted.';
    }
}

//Set the Response
$response = array('status' => $status, 'code' => $resp, 'message' => $msg, 'data' => $data);

//Send JSON Response Back
echo json_encode($response, JSON_PRETTY_PRINT);

//Close the MySQLi connection bridge
$db_conn->close();
