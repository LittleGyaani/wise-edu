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

//All Countries Route
$router->map('GET', '/countries', __DIR__ . '/app/views/countries.php', 'all-countries');

//All Locations Route
$router->map('GET', '/locations', __DIR__ . '/app/views/locations.php', 'all-locations');

//All Universities Route
$router->map('GET', '/universities', __DIR__ . '/app/views/universities.php', 'all-universities');

//Country Details Route
$router->map('GET', '/country/[**:country_alias]', __DIR__ . '/app/views/country-details.php', 'country-details');

//Location Details Route
$router->map('GET', '/location/[**:location_alias]', __DIR__ . '/app/views/location-details.php', 'location-details');

//University Details Route
$router->map('GET', '/university/[**:university_alias]', __DIR__ . '/app/views/university-details.php', 'university-details');

//All Programs Route
$router->map('GET', '/programs', __DIR__ . '/app/views/programs.php', 'all-programs');

//Program Details Route
$router->map('GET', '/program/[**:program_alias]', __DIR__ . '/app/views/program-details.php', 'program-details');

//Search Page Route
$router->map('GET', '/search', __DIR__ . '/app/views/search.php', 'search-page');

//About Us Page Route
$router->map('GET', '/about', __DIR__ . '/app/views/about.php','about-us');

//Contact Us Page Route
$router->map( 'GET', '/contact', __DIR__ . '/app/views/contact.php','contact-us');

//Contact Us Page Route
$router->map('GET', '/apply', __DIR__ . '/app/views/contact-us.php', 'apply-now');

/* API Routes */

//Form Process
$router->map('GET|POST', '/api/web/v1/process-form', __DIR__ . '/app/api/process-requests.php', 'process-form');

//404 error
$router->map('GET', '/404', __DIR__ . '/app/views/errors/error-404.php', 'error-404');

//Match Routes
$match = $router->match();

// call closure or throw 404 status
if($match) {
  require $match['target'];
}
else {
  header("HTTP/1.0 404 Not Found");
  require __DIR__ . '/app/views/errors/error-404.php';
}