<?php
#########################################################################
# File Name: redis.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 08 Oct 2015 05:43:24 PM CST
#########################################################################

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$result = $redis->set('test',"11111111111");
$result = $redis->get('test');
var_dump($result);    //结果：bool(true)
