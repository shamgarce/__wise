<?php

//直接引入的

return [

    /*
    |--------------------------------------------------------------------------
    | 文件配置信息
    |--------------------------------------------------------------------------
    |
    | 配置信息在文件中,访问 : Sham\Wise\Wise::getInstance()->ObjectConfig
    | 格式,对象名首字母大写
    */

    'FileReflect'    => [
        'Db'    => '../App/Config/Db.php',         //Mysql对象的
        'Cache' => '../App/Config/Cache.php',         //cache对象的
    ],

    // 'Providers'     => '../App/Config/Providers.php',    //存储 Sham\Wise\Wise::getInstance()->ObjectConfig

    /*
    |--------------------------------------------------------------------------
    | 配置信息
    |--------------------------------------------------------------------------
    |
    | 配置信息,访问 : Sham\Wise\Wise::getInstance()->_config
    |
    */
    'config'    => 'dbconchr',
];



