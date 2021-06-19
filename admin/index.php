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

//Login Page Route
$router->map('GET', '/login', __DIR__ . '/app/views/authentication.php', 'authentication-page');

/*Country Page Routes*/

//Country Lists Route
$router->map('GET', '/countries', __DIR__ . '/app/views/countries.php', 'countries-list');

//Country Add Route
$router->map('GET', '/country/add', __DIR__ . '/app/views/authentication.php', 'country-add');

//Country View Route
$router->map('GET', '/country/view', __DIR__ . '/app/views/country-view.php', 'country-view');

//Country Edit Route
$router->map('GET', '/country/edit/[i:cid]', __DIR__ . '/app/views/country-edit.php', 'country-edit');

//Match Routes
$match = $router->match();

// call closure or throw 404 status
if ($match) {
    require $match['target'];
} else {
    header("HTTP/1.0 404 Not Found");
    require __DIR__ . '/app/views/errors/error-404.php';
}
