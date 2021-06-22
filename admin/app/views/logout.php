<?php
//Calling Global Configuration File
require_once BASE_PATH . '/app/config/global.config.php';

//Destroy the SESSION Globally
session_destroy();

//Unset All Session Variables
session_unset();

//Redirect Back User to Login
header('Location:' . $base_URI . '/login');
