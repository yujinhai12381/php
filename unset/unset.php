<?php
#########################################################################
# File Name: unset.php
# Desc: 
# Author:yujinhai
# mail: yujinhai@yongche.com
# Created Time: 五  5/19 10:29:51 2017
#########################################################################



$a = 'a';
$b = &$a;

unset($a);
echo $b;

$a = 'a';
$b = $a;

unset($a);
echo $b;

