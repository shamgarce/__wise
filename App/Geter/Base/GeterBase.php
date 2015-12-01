<?php

namespace Sham\Geter;

use Sham\Set\Base;



class Geter extends Base
{

      private static $instance    = null;         //单例调用

      /*
      |--------------------------------------------------------------------------
      | $_config存储配置数据,用于反射
      |--------------------------------------------------------------------------
      | 在construct中执行$this->_config = $config;
      |
      */
      private $_config  = array();

      // *-----------------------------------------------------------------

      public function __construct($config = array()){
            $this->_config = $config;
      }


      //=======================================
      //=======================================

      private function demo()
      {
            /**
             */
      }

}
