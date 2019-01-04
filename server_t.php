<?php

//本机IP是10.211.55.13
//需要监听的端口是 9090


use Workerman\Worker;

require 'workerman/Autoloader.php';

// 创建一个Worker监听9090端口，不使用任何应用层协议
$tcp_worker = new Worker("tcp://0.0.0.0:9090");

// 启动4个进程对外提供服务
$tcp_worker->count = 4;

// 当客户端发来数据时
$tcp_worker->onMessage = function($connection, $data)
{
    // 向客户端发送hello $data
    $connection->send('hello ' . $data);
	$connection->close();
};

// 运行worker
Worker::runAll();