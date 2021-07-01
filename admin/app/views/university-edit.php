<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';

// print_r($match["params"]["cid"]);

//Global Declarations
$country_id = '';

//Receive Parameter
$university_id = $match["params"]["uid"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Include Meta Section -->
    <?php
    //Calling Meta Template
    include_once 'app/assets/templates/template-meta.php';
    ?>

    <!-- Title -->
    <title><?= $title_constant; ?> | Edit Univeristy </title>

    <?php
    //Calling Header Section
    include_once 'app/assets/templates/template-header.php';
    ?>

</head>

<body class="footer-offset footer-offset has-navbar-vertical-aside navbar-vertical-aside-show-xl">

    <!-- ========== HEADER ========== -->

    <?php
    //Calling Sidebar Section
    include_once 'app/assets/templates/template-navigation.php';
    ?>

    <!-- ========== END HEADER ========== -->

    <!-- ========== START NAVIGATION ========== -->

    <?php
    //Calling Sidebar Section
    include_once 'app/assets/templates/template-sidebar.php';
    ?>

    <!-- ========== END NAVIGATION ========== -->

    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <?php
            //Fetch University Data
            $getUniversityData = "SELECT * FROM `we_univeristy_list` wul JOIN `we_university_data` wud ON wud.`we_university_id` = wul.`we_univeristy_id` WHERE wul.`we_univeristy_id` = $university_id AND `we_univeristy_status` = 1";
            $fetchUniversityData = $db_conn->query($getUniversityData);
            $listUniversityData = $fetchUniversityData->fetch_assoc();
            ?>
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Edit University - <strong><?= $listUniversityData['we_univeristy_name']; ?></strong></h1>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="javascript:void(0);" data-toggle="modal" data-target="#inviteUserModal">
                            <i class="tio-add-circle mr-1"></i> Add University
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <div class="row justify-content-center text-center">
                <div class="col-12 mb-3 font-20 mb-lg-5">
                    <!-- Nav -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="demographics-tab" data-toggle="tab" href="#demographics" role="tab">
                                <i class="tio-folder-special mr-1"></i> Demographics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab">
                                <i class="tio-bookmark mr-1"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cover-image-tab" data-toggle="tab" href="#cover-image" role="tab">
                                <i class="tio-photo-landscape mr-1"></i> Cover Image
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="degree-tab" data-toggle="tab" href="#degree" role="tab">
                                <i class="tio-education mr-1"></i> Degree Duration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="accomodation-tab" data-toggle="tab" href="#accomodation" role="tab">
                                <i class="tio-hotel mr-1"></i> Accomodation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fee-structure-tab" data-toggle="tab" href="#fee-structure" role="tab">
                                <i class="tio-money mr-1"></i> Fee Structure
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="entry-requirement-tab" data-toggle="tab" href="#entry-requirement" role="tab">
                                <i class="tio-documents mr-1"></i> Entry Requirement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="recognition-tab" data-toggle="tab" href="#recognition" role="tab">
                                <i class="tio-award mr-1"></i> Recognition
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav -->

                    <form method="POST" action="javascript:void(0);" id="universityEdit" name="university_edit" enctype="multipart/form-data">
                        <input type="hidden" name="university_id" id="universityId" value="<?= $listUniversityData['we_univeristy_id']; ?>" />
                        <!-- Tab Content -->
                        <div class="tab-content mt-8" id="editUserModalTabContent">
                            <div class="tab-pane fade show active" id="demographics" role="tabpanel" aria-labelledby="demographics-tab">
                                <div class="form-row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityName" class="input-label">University Name*</label>
                                            <input type="text" class="form-control" name="university_name" id="universityName" placeholder="University Name" style="text-transform:uppercase" value="<?= $listUniversityData['we_univeristy_name']; ?>" required readonly />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityURL" class="input-label">University URL*</label>
                                            <input type="text" class="form-control" name="university_url" id="universityUrl" placeholder="University URL" value="<?= $listUniversityData['we_univeristy_alias']; ?>" required readonly />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityWebsiteURL" class="input-label">University Website*</label>
                                            <input type="text" class="form-control" name="university_website_url" id="universityWebsiteUrl" placeholder="University Website URL" value="<?= $listUniversityData['we_university_website_url']; ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityStatus" class="input-label">University Status*</label>
                                            <select class="js-select2-custom form-control" size="1" style="opacity: 0;" name="university_status" id="universityStatus" required>
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityPopular" class="input-label">University Popular*</label>
                                            <select class="js-select2-custom form-control" size="1" style="opacity: 0;" id="universityPopular" name="university_popular" required>
                                                <option value="Y">Yes</option>
                                                <option value="N">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityNew" class="input-label">University New*</label>
                                            <select class="js-select2-custom form-control" size="1" style="opacity: 0;" id="universityNew" name="university_new" required>
                                                <option value="0">Yes</option>
                                                <option value="1">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityType" class="input-label">University Type*</label>
                                            <select class="js-select2-custom form-control" size="1" style="opacity: 0;" id="universityType" name="university_type" required>
                                                <option value="PUBLIC">PUBLIC</option>
                                                <option value="PRIVATE">PRIVATE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityProgramType" class="input-label">University Program Type*</label>
                                            <select class="js-select2-custom form-control" size="1" style="opacity: 0;" id="universityProgramType" name="university_program_type" required>
                                                <option value="under-graduate">Under Graduate</option>
                                                <option value="post-graduate">Post Graduate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityCourseOffered" class="input-label">University Course Offered*</label>
                                            <select class="js-select2-custom form-control" size="1" style="opacity: 0;" id="universityCourseOffered" name="university_course_offered" required>
                                                <?php
                                                $getProgramList = "SELECT * FROM `we_program_list`";
                                                $fetchProgramList = $db_conn->query($getProgramList);
                                                while ($listProgramList = $fetchProgramList->fetch_assoc()) {
                                                ?>
                                                    <option value="<?= $listProgramList['we_program_name']; ?>" <?= ($listUniversityData['we_university_data_course_offered'] === $listProgramList['we_program_name']) ? 'selected' : ''; ?>> <?= $listProgramList['we_program_name']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityCourseLanguage" class="input-label">University Course Language*</label>
                                            <input type="text" class="form-control" name="university_course_language" id="universityCourseLanguage" placeholder="University Course Language" style="text-transform:uppercase" value="<?= $listUniversityData['we_university_data_course_language']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityCousreDuration" class="input-label">University Cousre Duration*</label>
                                            <input type="text" class="form-control" name="university_course_duration" id="universityCousreDuration" placeholder="University Cousre Duration" style="text-transform:uppercase" value="<?= $listUniversityData['we_university_data_course_duration']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="universityCourseFee" class="input-label">University Course Fee*</label>
                                            <input type="text" class="form-control" name="university_course_fee" id="universityCourseFee" placeholder="University Course Fee" style="text-transform:uppercase" value="<?= $listUniversityData['we_university_data_course_fee']; ?>" required />
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="universityProfile" class="input-label">University Introduction*</label>
                                            <textarea class="form-control summer-note" rows="5" cols="5" name="university_profile" id="universityProfile" required> <?= $listUniversityData["we_university_profile"]; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="cover-image" role="tabpanel" aria-labelledby="university-cover-image-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <!-- Card -->
                                            <div class="card">
                                                <!-- Profile Cover -->
                                                <div class="profile-cover">
                                                    <div class="profile-cover-img-wrapper">
                                                        <img id="universityCoverImg" class="profile-cover-img" src="<?= '../../../app/assets/img/universities/' .(($listUniversityData['we_university_cover_image'] != '') ? $listUniversityData['we_university_cover_image'] : 'university-default.jpeg'); ?>" alt="<?= $listUniversityData['we_univeristy_name']; ?>">
                                                        <!-- Custom File Cover -->
                                                        <div class="profile-cover-content profile-cover-btn">
                                                            <div class="custom-file-btn">
                                                                <input type="file" accept="image/*" name="university_cover_photo" class="js-file-attach custom-file-btn-input" id="profileCoverUplaoder" />
                                                                <label class="custom-file-btn-label btn btn-sm btn-white" for="profileCoverUplaoder">
                                                                    <i class="tio-add-photo mr-sm-1"></i>
                                                                    <span class="d-none d-sm-inline-block">Update Univeristy Cover</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- End Custom File Cover -->
                                                    </div>
                                                </div>
                                                <!-- End Profile Cover -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="tab-pane fade" id="degree" role="tabpanel" aria-labelledby="degree-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="universityDegreeDuration" class="input-label">University Degree Duration*</label>
                                                <textarea class="form-control summer-note" rows="5" cols="5" name="university_degree_duration" id="universityDegreeDuration" required> <?= $listUniversityData["we_university_degree_duration"]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="accomodation" role="tabpanel" aria-labelledby="accomodation-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="universityAccomodation" class="input-label">University Accomodation*</label>
                                                <textarea class="form-control summer-note" rows="5" cols="5" name="university_accomodation" id="universityAccomodation" required> <?= $listUniversityData["we_university_accommodation"]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="fee-structure" role="tabpanel" aria-labelledby="fee-structure-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="universityFeeStructure" class="input-label">University Fee Structure*</label>
                                                <textarea class="form-control summer-note" rows="5" cols="5" name="university_fee_structure" id="universityFeeStructure" required> <?= $listUniversityData["we_university_fee_structure"]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="entry-requirement" role="tabpanel" aria-labelledby="entry-requirement-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="universityEntryRequirement" class="input-label">University Entry Requirement*</label>
                                                <textarea class="form-control summer-note" rows="5" cols="5" name="university_entry_requirement" id="universityEntryRequirement" required> <?= $listUniversityData["we_university_entry_requirement"]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="recognition" role="tabpanel" aria-labelledby="entry-requirement-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="universityRecognition" class="input-label">University Recognition*</label>
                                                <textarea class="form-control summer-note" rows="5" cols="5" name="university_recognition" id="universityRecognition" required> <?= $listUniversityData["we_university_recognition"]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Tab Content -->
                            <div class="form-row mt-10">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">
                                        Save University Edits
                                        <i class="tio-checkmark-circle ml-1"></i>
                                    </button>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- End Content -->
    </main>

    <!-- ========== START FOOTER ========== -->
    <?php
    //Optional Call
    include_once 'app/assets/templates/template-footer.php';
    ?>
    <!-- ========== END FOOTER ========== -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <?php
    //Optional Call
    //include_once '';//template-misc
    ?>
    <!-- ========== END SECONDARY CONTENTS ========== -->

</body>

</html>

<!-- ========== START SCRIPT SECTION ========== -->

<!-- Include Scripts -->
<?php
//Calling Scripts Template
include_once 'app/assets/templates/template-scripts.php';
?>

<!-- ========== END SCRIPT SECTION ========== -->