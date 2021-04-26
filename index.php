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

//All Countries Route
$router->map('GET', '/countries', __DIR__ . '/app/views/countries.php', 'all-countries');

//All Locations Route
$router->map('GET', '/locations', __DIR__ . '/app/views/locations.php', 'all-locations');

//All Universities Route
$router->map('GET', '/universities', __DIR__ . '/app/views/universities.php', 'all-universities');

//Country Details Route
$router->map('GET', '/country/', __DIR__ . '/app/views/country-details.php', 'country-details');

//Location Details Route
$router->map('GET', '/location/', __DIR__ . '/app/views/location-details.php', 'location-details');

//University Details Route
$router->map('GET', '/university/', __DIR__ . '/app/views/university-details.php', 'university-details');

//All Programs Route
$router->map('GET', '/programs', __DIR__ . '/app/views/programs.php', 'all-programs');

//Program Details Route
$router->map('GET', '/program/', __DIR__ . '/app/views/program-details.php', 'program-details');

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