<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 06/09/2017
 * Time: 8:46 PM
 */
require __DIR__ . '/vendor/autoload.php';


use App\Application;
use App\TestClass;

$application = new Application();
$application->initialize();

$testClass = $application->get(TestClass::class);
var_dump($testClass->get());
