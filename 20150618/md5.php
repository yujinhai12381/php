<?php
#########################################################################
# File Name: md5.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Fri 19 Jun 2015 05:14:31 PM CST
#########################################################################
$str = "hello";
$str1 = "hello";
$str2 = "hello";
echo md5($str);
error_log("-------------------");
echo md5($str1,true);
error_log("-------------------");
echo md5($str2,"qddddd");
error_log("-------------------");
