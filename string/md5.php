<?php
#########################################################################
# File Name: md5.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 三  9/27 10:56:16 2017
#########################################################################

function code($name, $level) {
    $str = $name . $level;
    $md5 = md5($str);
    $ret = strtoupper(substr($md5, 0, 8));

    return $ret;
}

$name = "测试产品HH";
$level = 2;

$ret = code($name, $level);
error_log("ret: $ret");
