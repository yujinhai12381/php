<?php
#########################################################################
# File Name: round.php
# Desc: 
# Author:yujinhai
# mail: yujinhai@yongche.com
# Created Time: 六 11/ 5 21:07:18 2016
#########################################################################

$num1 = 39.12345678910;
$num2 = 166.12345678910;

//var_dump($num);
//var_dump(round($num, 2));

$lat = round($num1,2);
$lng = round($num2, 2);
$lat_lng = "{$lat}_{$lng}";
error_log("============");
var_dump($lat_lng);
