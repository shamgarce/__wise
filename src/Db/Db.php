<?php

namespace Sham\Db;

/**
 * Class wise
 * @package Sham\wise
 */

class Db
{
      private $_config  = array();

      public function __construct($config = array()){
            print_r($config);
      }

      function __invoke($key) {
            //设置一个值
            if(is_string($key)){
                  return $this->_config[$key];
            }else{
                  return null;
            }
      }
      public function test(){
            echo 123;
      }

}
