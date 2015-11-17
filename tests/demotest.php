<?php
include("../vendor/autoload.php");

$wise = Sham\wise\wise::getInstance([
//    'ini' => [
//        'un'    => 'un',
//        'te2'        => '125.0.0.1',
//    ],
//    'file'=>[
//       // 'Config'    => '../App/Config/Config.php',
//        'mysql'        => '../App/Config/mysql.php',
//    ],
]);

//$wise->C('myinfo',[]);
//$wise->C('myinfo','123123123123');
//$md = $wise('myinfo');

$wise->load('mysql','../App/Config/mysql.php');     //载入配置的参数
//$wise->loadnewobj('ob','Sham\wise\ob',$params);   //注入对象 new
$wise->loadobj('ob','Sham\wise\ob',123);            //注入对象 getInstance




$dbconfig = $wise->C('mysql');



var_dump($wise);
exit;

$wise->ob->run();
exit;
echo '<pre>';
print_r($dbconfig);
exit;

