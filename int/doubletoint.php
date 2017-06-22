<?php
#########################################################################
# File Name: doubletoint.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 四  6/22 13:48:18 2017
#########################################################################

$f = 0.5722;
$ret = '57.22';

$num = round($f * 100,3);

var_dump($num);

echo intval($f * 100);  //56
