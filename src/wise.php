<?php

namespace wise;

class wise{

      private $_config = array();
      private static $_instance = null;

      /**
       * @param string $conf
       * �������û�ȡ�趨
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
       * ��������
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
       * ����һ���ļ�������
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
       * ����ȫ�ֲ���
       */
      public function C($key = '',$value = array()){
            $args = func_num_args();

            //1 : ����������Ϣ
            if($args == 0){
                  return $this->_config;
            }

            //2 : ��һ������
            if($args == 1){

                  if(is_string($key)){  //��������key���ַ���
                        return isset($this->_config[$key])?$this->_config[$key]:null;
                  }
                  if(is_array($key)){
                        if(array_keys($key) !== range(0, count($key) - 1)){  //��������key�ǹ�������
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
                  //����һ��ֵ
                  if(is_string($key)){
                        $this->_config[$key] = $value;
                  }else{
                        halt('�����������ȷ');
                  }
            }
            return null;
      }

      /**
       * @param $key
       * @return null
       * �������е�����
       */
      function __invoke($key) {
            //����һ��ֵ
            if(is_string($key)){
                  return $this->_config[$key];
            }else{
                  return null;
            }
      }

}
