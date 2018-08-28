<?php

// Application directory is the current directory
//应用目录为当前目录
defind('APP_PATH', __DIR__.'/');

// turn on the debug
//开启调试模式
defind('APP_DEBUG', true);

// load framework file
//加载框架文件
require APP_PATH.'okphp/okphp.php';

//load config file
//加载配置文件
$config = require APP_PATH.'config/config.php';

//make the framework run
//实例化框架
(new okphp\okphp($config))->run();
