URI
=======

The `shampeak/request` package provides simple and intuitive classes to create and manage URIs in PHP.

要点
------

- Simple API
- [RFC3986](http://tools.ietf.org/html/rfc3986) compliant
- Implements the `UriInterface` from [PSR-7][]
- Fully documented
- Framework Agnostic
- Composer ready, [PSR-2][] and [PSR-4][] compliant

文档
------

完整的文档地址 [url.thephpleague.com](http://url.thephpleague.com).

系统需求
-------

You need:

- **PHP >= 5.5.0** , but the latest stable version of PHP is recommended
- the `mbstring` extension
- "league/url": "^3.3"

To use the library.

安装
-------

使用composer安装 `shampeak\request` .

```
$ composer require shampeak/request
```

测试
-------

`League\Uri` has a [PHPUnit](https://phpunit.de) test suite and a coding style compliance test suite using [PHP CS Fixer](http://cs.sensiolabs.org/). To run the tests, run the following command from the project folder.

``` bash
$ composer test
```

使用
-------

```
//$req = new Sham\Http\Request(Sham\Environment::getInstance());
$req = new Sham\Request() ;
$get = $req->get();       //GET����
$path1 = $req->getPath(); //path����
$path2 = $req->getPath()->toArray();  //path����
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
