<?php
#########################################################################
# File Name: serialize.php
# Desc: 
# Author:yujinhai
# Created Time: 二  2/ 7 15:22:35 2017
#########################################################################

$array = array(); 
$array['key'] = 'website'; 
$array['value']='www.chhua.com'; 
$a = serialize($array); 
echo $a; 
error_log("\n--------------------");
unset($array); 
$a = unserialize($a); 
print_r($a); 
?> 

