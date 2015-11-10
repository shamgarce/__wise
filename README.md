[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

WISE
=======

Package `shampeak/wise` 为程序提供配置信息支持.

要点
------

- Simple API
- [RFC3986](http://tools.ietf.org/html/rfc3986) compliant
- Composer ready, [PSR-2][] and [PSR-4][] compliant
- Implements the `UriInterface` from [PSR-7][]
- Framework Agnostic
- Fully documented
- Demo

文档
------

完整的文档地址 [wise.phpleague.cn](http://wise.phpleague.cn).

系统需求
-------

You need:

- **PHP >= 5.4.9** , but the latest stable version of PHP is recommended

To use the library.

安装
-------

使用composer安装 `shampeak/wise` .

```
$ composer require shampeak/wise
```

使用前
-------

```
include("../vendor/autoload.php");
```


使用
-------

```
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
```

安全
-------

如果你发现任何安全问题,请发EMAIL shampeak@sina.com 给我,不要用issue tracker.

许可协议
-------

本系统采用 MIT 许可协议(MIT)。请参阅[License File](LICENSE)获取更多信息。

[PSR-2]: http://www.php-fig.org/psr/psr-2/
[PSR-4]: http://www.php-fig.org/psr/psr-4/
[PSR-7]: http://www.php-fig.org/psr/psr-7/
