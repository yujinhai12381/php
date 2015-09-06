<?php
#########################################################################
# File Name: inarray.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Sun 06 Sep 2015 04:09:37 PM CST
#########################################################################

//$a = 1;
$a = 0;
$test_array = array(1,2,3);

if (in_array($a,$test_array)) {
    error_log("yujinhai in array");
} else {
    error_log("not in array");
}
