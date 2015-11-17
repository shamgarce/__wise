<?php
namespace Sham\wise;
/**
 * Class Base
 * ArrayAccess -
interface ArrayAccess
boolean offsetExists($index)
mixed offsetGet($index)
void offsetSet($index, $newvalue)
void offsetUnset($index)
 *
 * 示例
$base = new F();
$base['s'] = 999;       //set
unset($base['s']);      //unset
echo isset($base['s']); //isset
echo $base['s'] ;       //get
 *  IteratorAggregate  ->foreach
其他操作
 * $base->clear     清除所有数据
 */

class ob{

    /**
     * Key-value array of arbitrary data
     * @var array
     */
    public $data = array();
    public static $_instance = null;

    public function __construct($conf)
    {
print_r($conf);
//echo 'oob';
    }

    public function run()
    {
        echo 'run';
    }


    public static function getInstance($conf = array()){
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self($conf);
        }
        return self::$_instance;
    }

}

