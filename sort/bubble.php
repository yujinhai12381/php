<?php
#########################################################################
# File Name: bubble.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 五  5/26 11:22:45 2017
#########################################################################

function bubble(&$a) {
    if (!is_array($a)) {
        return;
    }

    $len = count($a);

    if ($len <= 1) {
        return $a;
    }

    for ($i = 0; $i < $len; $i++) {
        for ($j=0; $j < $len-$i-1; $j++) {
            if ($a[$j] > $a[$j+1]) {
                $tmp = $a[$j+1];
                $a[$j+1] = $a[$j];
                $a[$j] = $tmp;
            }
        }
    }

    return $a;
}

$arr = array(5,1,66,22,7);

bubble($arr);
var_dump($arr);



