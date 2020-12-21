<?php
ini_set('display_errors', 'on');

use Workerman\Worker;

// 标记是全局启动
define('GLOBAL_START', 1);
// 自动加载类
require_once __DIR__ . '/../vendor/autoload.php';

/*if(strpos(strtolower(PHP_OS), 'win') === 0)
{
    exit("start.php not support windows, please use start_for_win.bat\n");
}*/

// 检查扩展
if (!extension_loaded('pcntl')) {
    exit("Please install pcntl extension. See http://doc3.workerman.net/appendices/install-extension.html\n");
}

if (!extension_loaded('posix')) {
    exit("Please install posix extension. See http://doc3.workerman.net/appendices/install-extension.html\n");
}

// 加载所有进程
require_once __DIR__ . '/start_register.php';
require_once __DIR__ . '/start_gateway.php';
require_once __DIR__ . '/start_business_worker.php';

// 运行所有服务
Worker::runAll();
