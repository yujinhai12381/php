<?php
#########################################################################
# File Name: max.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 六  5/13 15:49:12 2017
#########################################################################

function max_test( $a , $b, $c ) {
    return ($a > $b) ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c );
}

$ret = max_test(101, 5 ,1);
var_dump($ret);

