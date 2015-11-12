<?php
#########################################################################
# File Name: test.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Mon 13 Jul 2015 07:05:17 PM CST
#########################################################################
$var['test'] = 0;
$a = isset($var['test']) ? $var['test']: 0;
if (empty($a)) {
    error_log("empty");
} else {
    error_log("not empty");
}
