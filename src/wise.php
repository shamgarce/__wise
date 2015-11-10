<?php

namespace wise;

class wise{

      private $_config = array();
      private static $_instance = null;

      /**
       * @param string $conf
       * 根据配置获取设定
       */
      private function __construct($conf = ''){
            $filelist = $conf['file']?:array();
            foreach($filelist as $key=>$value){
                  $this->load($key,$value);
            }
            $ini = $conf['ini']?:array();
            $this->C($ini);
      }

      /**
       * @param $conf
       * @return wise|null
       * 单例调用
       */
      public static function getInstance($conf){
            if(!(self::$_instance instanceof self)){
                  self::$_instance = new self($conf);
            }
            return self::$_instance;
      }


      /**
       * @param $key
       * @param string $file
       * 载入一个文件的配置
       */
      public function load($key,$file=''){
            if(file_exists($file)){
                  $res = include $file;
                  $this->C($key,$res);
            }
      }

      /**
       * @param string $key
       * @param array $value
       * @return array|null
       * 设置全局参数
       */
      public function C($key = '',$value = array()){
            $args = func_num_args();

            //1 : 返回配置信息
            if($args == 0){
                  return $this->_config;
            }

            //2 : 有一个参数
            if($args == 1){

                  if(is_string($key)){  //如果传入的key是字符串
                        return isset($this->_config[$key])?$this->_config[$key]:null;
                  }
                  if(is_array($key)){
                        if(array_keys($key) !== range(0, count($key) - 1)){  //如果传入的key是关联数组
                              $this->_config = array_merge($this->_config, $key);
                        }else{
                              $ret = array();
                              foreach ($key as $k) {
                                    $ret[$k] = isset($this->_config[$k])?$this->_config[$k]:null;
                              }
                              return $ret;
                        }
                  }

            }else{
                  //设置一个值
                  if(is_string($key)){
                        $this->_config[$key] = $value;
                  }else{
                        halt('传入参数不正确');
                  }
            }
            return null;
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
