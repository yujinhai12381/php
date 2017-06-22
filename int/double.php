<?php
#########################################################################
# File Name: double.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 四  6/22 14:06:47 2017
#########################################################################

$sum = "12300.00";
$a = "10000.30";
$b = '2000';
$c = "299.40";

$sum = (float) $sum;
$ret = (float)($a + $b + $c);

var_dump($sum, $ret);
error_log("--------------");
$result = bccomp($sum, $ret, 2);
var_dump($result);


