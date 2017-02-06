<?php
#########################################################################
# File Name: array.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 19 Nov 2015 11:43:15 AM CST
#########################################################################

$a = array(
    'b' =>array(
        'e' => 2,
    ),
    'c' =>3,
    'a'=> 1,
);

$b = array(
    'a'=> 1,
    'b' => array(
        'e' => 2,
    ),
    //        'c' =>3,
);


$c = array_diff($a, $b);
var_dump($c);
//if ($a == $b) {
//    error_log("same!!");
//} else {
//    error_log("not same!!");
//}
