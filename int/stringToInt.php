<?php
#########################################################################
# File Name: stringToInt.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 24 Dec 2015 11:07:22 AM CST
#########################################################################


$num = (string)20151234;

error_log("1===>".var_dump($num));
$ret = (int)$num;

error_log("2--------".var_dump($ret));
