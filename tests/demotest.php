<?php
include("../vendor/autoload.php");

$wise = wise\wise::getInstance([
    'ini' => [
        'username'    => '',
        'dbhost'        => '125.0.0.1',
    ],
    'file'=>[
        'Config'    => 'Config/Config.php',
        'db'        => 'Config/db.php',
    ],
]);

$wise->load('db2','Config/Config.php');

$wise->C('myinfo',[]);
$wise->C('myinfo','123123123123');

$md = $wise('myinfo');

print_r($md);

print_r($wise->C());
exit;
