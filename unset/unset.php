<?php
#########################################################################
# File Name: unset.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 五  5/19 10:29:51 2017
#########################################################################



$a = '1111';
$b = &$a;

unset($a);
echo $b;

$a = 'hello';
$b = $a;

unset($a);
echo $b;

