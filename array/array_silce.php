<?php
#########################################################################
# File Name: array_silce.php
# Desc: 
# Author:yujinhai
# mail: yujinhai@yongche.com
# Created Time: 二 11/ 8 17:41:31 2016
#########################################################################

$a = array (
    'a' => 1,
    'b' => 2,
    'c' => 112311212,
);

$num = intval(-11);
error_log($num);
$silce = array_slice($a,1,10);

var_dump($silce);

