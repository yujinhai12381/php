<?php
#########################################################################
# File Name: mktime.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 二 11/17 16:05:58 2020
#########################################################################

$season = 1;
$year  = 2020;

$time = mktime(0, 0, 0, ($season -1)*3+1, 1,$year);
error_log($time);
