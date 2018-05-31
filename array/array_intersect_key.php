<?php
#########################################################################
# File Name: array_intersect_key.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 2018年05月31日 星期四 10时26分32秒
#########################################################################

$a = [
    'a' => 'a1',
    'b' => 'b1',
    'c' => 'c1',
];

$b = [
    'a' => 'a2',
    'b' => 'b2',
    'd' => 'd1',
];

$c = [
    'a' => 'a3',
    'c' => 'b3',
    'e' => 'd3',
];

$ret1 = array_intersect_key($a, $b);
error_log("a&b");
error_log(var_export($ret1, true));

$ret2 = array_intersect_key($a, $b, $c);
error_log("a&b&c");
error_log(var_export($ret2, true));

