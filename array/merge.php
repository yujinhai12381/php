<?php
#########################################################################
# File Name: merge.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Tue 22 Dec 2015 03:01:04 PM CST
#########################################################################


$ret1 = array( "1"=> 1, "2" => 2);

$ret2 = array("2" => 3);

$ret = array_merge($ret1,$ret2);

error_log("ret :".var_dump($ret));

$ret3 = array( "a"=> 1, "b" => 2);

$ret4 = array("b" => 3);

$ret5 = array_merge($ret3,$ret4);
error_log("ret5:".var_dump($ret5));

