<?php
#########################################################################
# File Name: array.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 19 Nov 2015 11:43:15 AM CST
#########################################################################

$a = array(
        'a'=> 1,
    );
unset($a['a']);
var_dump($a);

if ( empty($a)) {
    error_log("empty");
}
