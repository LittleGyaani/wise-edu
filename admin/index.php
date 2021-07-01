<?php

//Set Header for Router Page
header("Content-Type: text/html");

/**
 * Main Route Controller File 
 * Copyright (C) 2021 Little Gyaani.
 * Company : WISE EDUCATION GROUP
 * Domain : admin.wiseeducation.in
 * Package : Main
 * Source : Main
 * DTStamp : 03/04/2021 17:01:47
 * **/

//All Necessary Includes

/* Global Configuration */
include __DIR__ . '/app/config/global.config.php';

/*------------------------------------------------------------*/

/* Define Routes for the APP */

/* Website Routes */

//Index Page Route
$router->map('GET', '/', __DIR__ . '/app/views/dashboard.php', 'dashboard-page');

/* Auth Routes */

//Login Page Route
$router->map('GET', '/login', __DIR__ . '/app/views/authentication.php', 'authentication-page');

//Logout Page Route
$router->map('GET', '/logout', __DIR__ . '/app/views/logout.php', 'logout-page');

/*Country Page Routes*/

//Country Lists Route
$router->map('GET', '/countries', __DIR__ . '/app/views/countries.php', 'countries-list');

//Country Add Route
$router->map('GET', '/country/add', __DIR__ . '/app/views/country-add.php', 'country-add');

//Country Edit Route
$router->map('GET', '/country/edit/[i:cid]', __DIR__ . '/app/views/country-edit.php', 'country-edit');

/* Location Page Routes */

//Location Lists Route
$router->map('GET', '/locations', __DIR__ . '/app/views/locations.php', 'locations-list');

//Location Add Route
$router->map('GET', '/location/add', __DIR__ . '/app/views/locations.php', 'location-add');

//Location Edit Route
$router->map('GET', '/location/edit/[i:lid]', __DIR__ . '/app/views/locations.php', 'locations-edit');

/* Program Page Routes */

//Program Lists Route
// $router->map('GET', '/locations', __DIR__ . '/app/views/locations.php', 'locations-list');

//Program Add Route
// $router->map('GET', '/program/add', __DIR__ . '/app/views/program-add.php', 'program-add');

/* Univesity Page Routes */

//University Add Route
$router->map('GET', '/university/add', __DIR__ . '/app/views/university-add.php', 'university-add');

//Universities List Route
$router->map('GET', '/universities', __DIR__ . '/app/views/universities.php', 'universities-list');

//University Edit Route
$router->map('GET', '/university/edit/[i:uid]', __DIR__ . '/app/views/university-edit.php', 'university-edit');

/* Gallery Page Routes */

//Add Gallery
$router->map('GET', '/gallery/add', __DIR__ . '/app/views/gallery-upload.php', 'gallery-add');

/* FAQ Page Routes */

//Add FAQ
$router->map('GET', '/faq/add', __DIR__ . '/app/views/faq-add.php', 'faq-add');

/* Testimonial Page Routes */

//Add FAQ
$router->map('GET', '/testimonial/add', __DIR__ . '/app/views/testimonial-add.php', 'testimonial-add');

/* API Routes */

//API Route
$router->map('GET|POST', '/api/web/v1', __DIR__ . '/app/api/index.php', 'web-api-v1');

//Match Routes
$match = $router->match();

// call closure or throw 404 status
if ($match) {
    require $match['target'];
} else {
    header("HTTP/1.0 404 Not Found");
    require __DIR__ . '/app/views/errors/error-404.php';
}
