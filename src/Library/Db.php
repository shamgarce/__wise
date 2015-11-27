<?php

namespace Sham\Wise\Library;

/**
 * Class wise
 * @package Sham\wise
 */

class Db
{
      private $_config  = array();

      public function __construct($config = array()){
      }

      function __invoke($key) {
            //设置一个值
            if(is_string($key)){
                  return $this->_config[$key];
            }else{
                  return null;
            }
      }

}
