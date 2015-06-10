<?php
#########################################################################
# File Name: date.php
# Desc: 
# Author:root
# Created Time: Wed 10 Jun 2015 02:57:34 PM CST
#########################################################################
$time = time();
$d = date("Y-m-d H:i:s",$time);
var_dump($d);
$d = "1970-01-01 ".explode(" ",$d)[1];
var_dump($d);
$v = strtotime($d);
var_dump($v);

?>
