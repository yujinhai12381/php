<?php
#########################################################################
# File Name: array_pop.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 四  8/17 15:27:37 2017
#########################################################################

$a = [
    1, 2, 3, 4, 5
];

//$ret = array_pop($a);
$ret = end($a);
var_dump($ret);
var_dump($a);

