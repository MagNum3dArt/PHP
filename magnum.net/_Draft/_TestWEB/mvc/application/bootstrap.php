<?php
/**
 * Created by MagNum on 27.11.2016.
 */

//print_r(explode('/', $_SERVER['REQUEST_URI']));

require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор

