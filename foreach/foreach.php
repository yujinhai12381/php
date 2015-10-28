<?php
#########################################################################
# File Name: foreach.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 22 Oct 2015 07:24:04 PM CST
#########################################################################

$arr = array("one", "two", "three");

foreach ($arr as $key => $value) {
        echo "Key: $key; Value: $value<br />\n";
}
error_log("======================================");
foreach ($arr as $value) {
        echo " Value: $value<br />\n";
}
?>
