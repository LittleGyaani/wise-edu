<?php
//Calling Global Configuration
require_once 'app/config/global.config.php';
header('Location:' . $router->generate('error-404'));

// $country_slug = $match["params"]["country_alias"];