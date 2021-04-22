<?php

//Set Header for Router Page
header("Content-Type: text/html");

/**
 * Main Route Controller File 
 * Copyright (C) 2020 Little Gyaani.
 * Company : Fun At City
 * Domain : www.funatcity.com
 * Package : Main
 * Source : Main
 * DTStamp : 03/09/2020 17:01:47
 * **/

//All Necessary Includes

/* Global Configuration */
include __DIR__ . '/app/config/global.config.php';

/*------------------------------------------------------------*/

/* Define Routes for the APP */

/* Website Routes */

//Index Page Route
$router->map('GET', '/', __DIR__ . '/app/views/home.php','index');

//Home Page Route
$router->map('GET', '/home', __DIR__ . '/app/views/home.php','home-default');

//About Us Page Route
$router->map('GET', '/site/about', __DIR__ . '/app/views/about-us.php','about');

//Contact Us Page Route
$router->map( 'GET', '/site/contact', __DIR__ . '/app/views/contact-us.php','contact-us');


//Match Routes
$match = $router->match();

// call closure or throw 404 status
if($match) {
  require $match['target'];
}
else {
  header("HTTP/1.0 404 Not Found");
  require 'app/views/errors/error-404.php';
}