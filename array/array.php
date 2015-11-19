<?php
#########################################################################
# File Name: array.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 19 Nov 2015 11:43:15 AM CST
#########################################################################

$a = array(
        'a'=> 1,
        'b' =>2,
        'c' =>3
    );

if (in_array(1,$a)) {
    error_log(" 1 in array!!");
}

if (!in_array(4,$a)) {
    error_log(" 4 not in array!!");
}
