<?php
#########################################################################
# File Name: array.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 19 Nov 2015 11:43:15 AM CST
#########################################################################

$a = [
    [
        'app_id' => 1,
        'role_id' => 5,
        'action_id' => 24,
    ]
];
$b = [
    [
        'app_id' => 1,
        'role_id' => 5,
        'action_id' => 11,
    ]
];


$c = array_diff($a, $b);
var_dump($c);
//if ($a == $b) {
//    error_log("same!!");
//} else {
//    error_log("not same!!");
//}
