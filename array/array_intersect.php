<?php
#########################################################################
# File Name: array_intersect.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 2018年04月24日 星期二 18时57分51秒
#########################################################################


$a = [
    1,
    2,
    ];

$b = [
    1,
    3,
    ];
$ret = array_intersect($a, $b);
error_log(json_encode($a). "+".json_encode($b).' = '. json_encode($ret));

$a1 = [
    'a' => 1,
    2,
    ];

$b1 = [
    3,
    1,
    ];

$ret1 = array_intersect($a1, $b1);
error_log(json_encode($a1). "+".json_encode($b1).' = '. json_encode($ret1));

$a2 = [
    1,
    2,
    ];

$b2 = [
    3,
    4,
    ];

$ret2 = array_intersect($a2, $b2);
error_log(json_encode($a2). "+".json_encode($b2).' = '. json_encode($ret2));

