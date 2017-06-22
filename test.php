<?php
#########################################################################
# File Name: test.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 三  6/ 1 14:20:58 2016
#########################################################################

echo strtotime("now"), "\n";
echo strtotime("2016-06-01 00:00:00"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
error_log('test');
?>
