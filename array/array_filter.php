<?php
#########################################################################
# File Name: array_filter.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 四  6/29 23:08:35 2017
#########################################################################

$entry = array(
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => ''
);

print_r(array_filter($entry));
