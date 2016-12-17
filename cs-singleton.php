<?php
/**
 * Created by PhpStorm.
 * User: Clint Cain Small
 * Date: 6/20/2016
 * Time: 4:45 PM
 */

namespace cs\lib;


abstract class csSingleton
{
    /**
     * @return null|object - A new instance of the extender
     */
    public static function Instance()
    {
        $args = func_get_args();
        $class = get_called_class();
        $instance = null;
        if (is_array($args)) {

            try {
                $r = new \ReflectionClass($class);
                $instance = $r->newInstanceArgs($args);

            } catch (\Exception $e) {
                //todo: fix this-->no construct define, swallow error..log it i mean lol
                $error = $e;
            }
        }
        else {
            $instance = new $class();
        }
        return $instance;
    }

    /**
     * @param $addPropertiesToClass - properties of extender class to be returned
     * @return mixed
     */
    public static function ChainInstance($addPropertiesToClass){
        $class = get_called_class();
        $instance = new $class();
        if(is_object($addPropertiesToClass)){
            foreach($addPropertiesToClass as $prop => $value){
                $instance->$prop = $value;
            }
        }
        return $instance;
    }
}