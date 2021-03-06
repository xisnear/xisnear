<?php

/**
 * core
 * 
 * @version 1.0
 * @package Frame
 * @ignore
 * 
 */

namespace Core\Frame;

use Core\Frame\Traits\Factory;

/**
 * class
 * 
 * 
 */
class Whoops {
    
    use Factory;
    
    const TYPE_PAGE = 'PrettyPageHandler';
    
    const TYPE_JSON = 'JsonResponseHandler';
    
    const TYPE_CONSOLE = 'PlainTextHandler';
    
    public function init($type = self::TYPE_PAGE) {
        $whoops = new \Whoops\Run;

        $handler_name = '\Whoops\Handler\\' . $type;
        $whoops->pushHandler(new $handler_name());

        $whoops->register();
    }

}
