<?php
/**
 *
 */

function C($key = '', $value = array())
{
    echo '123';
}

include("../src/Helper.php");

/**
 * autoload : psr-4
 */
include("../vendor/autoload.php");


    /*
    |--------------------------------------------------------------------------
    | 配置信息设置
    |--------------------------------------------------------------------------
    |
    | 通过C函数对基础参数进行配置
    |
    */

    $config = [
        'afds'=>'adsffsdafdsa',
        'afds1'=>'adsffsdafdsa',
        'afds2'=>'adsffsdafdsa',
        'afds3'=>'adsffsdafdsa',
        'afds4'=>'adsffsdafdsa',
    ];

    //设置初始参数
    $c = Sham\Wise\C($config);


//对象配置信息存储的地址
//Sham\Wise\Wise::getInstance()->ObjectConfig

//返回所有的服务列表
print_r(Sham\Wise\Wise::getInstance()->ObjectConfig);










//返回所有已经设置的参数
$c = Sham\Wise\C();



print_r($c);
echo 'mark';
exit;


$ms =  Sham\Wise\Wise::getInstance();

$make = 'db';

$ob = Sham\Wise\Wise::getInstance()->make($make);
var_dump($ob);
exit;






$app = Sham\Wise\Helper\app();



var_dump($app);


exit;





$config = include('../App/Config/Config.php');


print_r($config);









$wise = Sham\Wise\Wise::getInstance([
//    'ini' => [
//        'un'    => 'un',
//        'te2'        => '125.0.0.1',
//    ],
    'file'=>[
        'Config'    => '../App/Config/Config.php',
        'mysql'        => '../App/Config/Mysql.php',
    ],
]);

//$wise->C('myinfo',[]);
//$wise->C('myinfo','123123123123');
//$md = $wise('myinfo');

//入口配置
//$wise->load('mysql','../App/Config/Mysql.php');     //载入配置的参数



//$wise->loadnewobj('ob','Sham\wise\ob',$params);   //注入对象 new
$wise->loadobj('ob','Sham\wise\ob',123);            //注入对象 getInstance



/**
 * 配置
 */



$dbconfig = $wise->C('mysql');



var_dump($wise);
exit;

$wise->ob->run();
exit;
echo '<pre>';
print_r($dbconfig);
exit;

