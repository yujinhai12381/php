<?php
#########################################################################
# File Name: keys.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Tue 22 Dec 2015 03:01:04 PM CST
#########################################################################


$ret1 = array( "1"=> 1, "52" => 2);

$ret2 = array("2" => 3);
$ret =array();
$ret = array_keys($ret);

error_log("ret :    ". var_dump($ret));

