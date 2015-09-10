<?php
#########################################################################
# File Name: print_r.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 10 Sep 2015 02:52:37 PM CST
#########################################################################

$testArray = array(
                'a' => "hahaha",
                'b' => "hehehe",
                'c' => "xixixi"
            );
error_log(print_r($testArray,true));
