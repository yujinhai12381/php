<?php
#########################################################################
# File Name: test.php
# Desc: 
# Author:yujinhai
# mail: yujinhai@yongche.com
# Created Time: 五  5/ 6 18:26:58 2016
#########################################################################

$tatol = $argv[1];
$coup = $argv[2];

$tatol1 = $tatol*0.6;
$tatol2= (($tatol-$coup) > 0) ? ($tatol-$coup): 0;

error_log("总额  :".$tatol);
error_log("-----------------");
error_log("折扣后:".$tatol1);
error_log("用券后:".$tatol2);
error_log("-----------------");
error_log("券额  :".$coup);
error_log("券应值:".$coup*0.6);
error_log("券实值:".($tatol1-$tatol2));

