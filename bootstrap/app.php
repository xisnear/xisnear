<?php
/*
|--------------------------------------------------------------------------
| add autoload
|--------------------------------------------------------------------------
*/
require_once __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| load config file .env
|--------------------------------------------------------------------------
*/
Dotenv::load(__DIR__.'/../');

/*
|--------------------------------------------------------------------------
| add whoops
|--------------------------------------------------------------------------
*/
Xisnear\Frame\Whoops::singleton()->init(\Xisnear\Frame\Whoops::TYPE_PAGE);

/*
|--------------------------------------------------------------------------
| add eloquent db orm
|--------------------------------------------------------------------------
*/
Xisnear\Frame\Eloquent::singleton()->init();

/*
|--------------------------------------------------------------------------
| add monolog
|--------------------------------------------------------------------------
*/
Xisnear\Frame\Log::singleton()->init();

/*
|--------------------------------------------------------------------------
| add config file routes.php
|--------------------------------------------------------------------------
*/
require_once __DIR__.'/../app/Http/routes.php';

/*
|--------------------------------------------------------------------------
| get application
|--------------------------------------------------------------------------
*/
$app = Xisnear\Frame\App::singleton();

return $app;