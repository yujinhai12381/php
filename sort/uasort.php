<?php
#########################################################################
# File Name: uasort.php
# Desc: 
# Author:yujinhai
# mail: yujinhai@yongche.com
# Created Time: 二 11/ 8 10:22:00 2016
#########################################################################


$a = array(
    '1' => array(
        'id' => 001,
        'distance' => 500
    ),
    '2' => array(
        'id' => 003,
        'distance' => 0 
    ),
    '3' => array(
        'id' => 004,
        'distance' => 4 
    )
);

function cmp($a, $b) {
    if ($a['distance'] == $b['distance']) {
        return 0;
    }

    return ($a['distance'] < $b['distance']) ? -1 : 1;
}


print_r($a);
error_log("-------------");
uasort($a, 'cmp');
//$c = uasort($a, 'cmp');
error_log("-------------");
var_dump($a);
