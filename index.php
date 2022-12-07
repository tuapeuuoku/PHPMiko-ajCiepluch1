<?php

use Steampixel\Route;
require_once('config.php');
require_once('class/User.class.php');

Route::add('/', function() {
    echo "Strona główna";
});
Route::run('/PHPMikołajCiepluch');
?>