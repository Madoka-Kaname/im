<?php

use GatewayWorker\BusinessWorker;
use Workerman\Worker;
// 自动加载类
require_once __DIR__ . '/../vendor/autoload.php';

$worker = new BusinessWorker();

$worker->name = 'im_business_worker';

$worker->count = 4;
// 服务注册地址
$worker->registerAddress = '127.0.0.1:1238';

// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START'))
{
    Worker::runAll();
}

