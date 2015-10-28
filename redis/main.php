<?php
#########################################################################
# File Name: main.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 08 Oct 2015 03:45:54 PM CST
#########################################################################
include './Redis.php';
include './config.php';

const REDIS_DB = 'distance';

//var_export($redisConfig);
$_redis = YC_Redis::getInstance('distance',$redisConfig['distance']);

//var_export($redisConfig);
$result = $_redis->set('test',"11111111111");
var_dump($result);    //结果：bool(true)
$result = $_redis->get('test');
var_dump($result);    //结果：bool(true)
//var_export($redisConfig);

