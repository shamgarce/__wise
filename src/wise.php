<?php

namespace Sham\Wise;

/**
 * Class wise
 * @package Sham\wise
 */

class Wise extends Set\Base
{
      /**
       * @var null
       * wise单例调用
       */
      private static $_instance = null;       //单例调用

      //服务对象存储
      public $providers = array();             //服务对象存储 映射
      public $instances = array();             //服务对象存储 实例


      //服务对象配置信息存储
      public $ObjectConfig = array();             //服务对象配置信息存储

      public $_config  = array();              //C函数的存储     //所有的配置信息存储在这里

      private $rootpath = '../App/Config/';     //配置文件的根目录

      /**
       * @param string $conf
       * 根据配置获取设定
       */
      private function __construct(){
            $this->_config = $this->load($this->rootpath."Config.php");
            $this->providers = $this->load($this->rootpath."Providers.php");

            if(is_array($this->_config['FileReflect'])){
                  foreach($this->_config['FileReflect'] as $key=>$file){
                        $this->ObjectConfig[ucfirst($key)] =  $this->load($file);
                  }
            }
      }

      /**
       * @param $conf
       * @return wise|null
       * 单例调用
       */
      public static function getInstance(){
            if(!(self::$_instance instanceof self)){
                  self::$_instance = new self();
            }
            return self::$_instance;
      }

      public function make($abstract,$parameters=[])
      {
            $abstract = ucfirst($abstract);
            // If an instance of the type is currently being managed as a singleton we'll
            // just return an existing instance instead of instantiating new instances
            // so the developer can keep using the same objects instance every time.
            if (isset($this->instances[$abstract])) {
                  return $this->instances[$abstract];
            }
            //未定义的服务类 返回空值;
            if (!isset($this->providers[$abstract])) {
                  return null;
            }
           // echo $abstract;

            $parameters = $parameters?:$this->ObjectConfig[$abstract];

            $this->instances[$abstract] = $this->build($abstract,$parameters);
            return $this->instances[$abstract];
      }

      public function build($abstract, array $parameters = [])
      {
            $obj_ = $this->providers[$abstract];
            $obj = new $obj_($parameters);
            return $obj;
      }

      /**
       * @param $key
       * @param string $file
       * 载入一个文件的配置
       */
      public function load($file=''){
            if(file_exists($file)){
                  return include $file;
            }
            return [];
      }



      /**
       * Ensure a value or object will remain globally unique
       * @param  string  $key   The value or object name
       * @param  Closure        The closure that defines the object
       * @return mixed
       */
      public function singleton($key, $value)
      {

            $this->set($key, function ($c) use ($value) {
                  static $object;
                  if (null === $object) {
                        $object = $value($c);
                  }
                  return $object;
            });
      }

      /**
       * @param $key
       * @return null
       * 调用其中的数据
       */
      function __invoke($key) {
            //设置一个值
            if(is_string($key)){
                  return $this->_config[$key];
            }else{
                  return null;
            }
      }

}
