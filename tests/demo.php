<?php
/**
 *
 */
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

//    手动添加相对应的配置
//    $config = [
//        'afds'=>'adsffsdafdsa',
//        'afds1'=>'adsffsdafdsa',
//        'afds2'=>'adsffsdafdsa',
//        'afds3'=>'adsffsdafdsa',
//        'afds4'=>'adsffsdafdsa',
//    ];
//
//    //设置初始参数
//    $c = sc($config);

//返回所有的服务列表
//print_r(Sham\Wise\Wise::getInstance()->ObjectConfig);       //对象配置 -根据config中的FileReflect 得到相对应的配置
//print_r(Sham\Wise\Wise::getInstance()->providers);          //对象列表 -> Config/Providers.php
//print_r(sc());                                            //整体配置信息
//var_dump(Sham\Wise\Wise::getInstance());                    //wise对象

//配置文件直接读取Sham\Wise\Wise::getInstance()->ObjectConfig['db']
//var_dump(Sham\Wise\Wise::getInstance()->make('db'));          //单例访问 [实例化]
//var_dump(Sham\Wise\Wise::getInstance()->instances); //建立的对象 初始为空



//app函数中自己判断是否已经OK

sap('db')->test();      //体现优雅

    //->message('文章已保存');     //对类的调用


/*
    |--------------------------------------------------------------------------
    | 通用方法规划和设置
    |--------------------------------------------------------------------------
    | 1 : run()         执行的
    | 2 : __invoke      文字信息
    | 3 : description 打印出说明
    | 4 : construction 打印出结构性信息
    |
*/

exit;

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

