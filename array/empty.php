<?php
#########################################################################
# File Name: empty.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 三  8/19 17:43:44 2020
#########################################################################

$array = [
    11,
];

if (empty($array)) {
    error_log('empty');
} else {
    error_log('not empty');
}
