<?php
#########################################################################
# File Name: plus.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Wed 09 Dec 2015 10:17:44 AM CST
#########################################################################

$array1 = array('1'=> 1, '0'=>5);
$array2 = array('1'=> 2);


$array1 = $array2;
error_log(var_export($array1,true));
