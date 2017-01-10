<?php

/**
 * xisnear
 * 
 * @version 1.0
 * @package App\Traits
 * @ignore
 * @author pvol <pvol@163.com>
 */

namespace Xisnear\Rule\Traits;

/**
 * trait WithRule
 * 
 * used in model
 * 
 * @author pvol <pvol@163.com>
 */
trait UseRule{
    
    public static $rule_fact_obj;
    
    /**
     * used in the instance of model
     */
    public function useRule(){
        static::$rule_fact_obj = $this;
    }
    
    /**
     * used in the fact class
     */
    public static function getFact() {
        return static::$rule_fact_obj;
    }

}