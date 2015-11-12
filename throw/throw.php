<?php
#########################################################################
# File Name: throw.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Thu 29 Oct 2015 08:45:15 PM CST
#########################################################################

//try {
    $error = 'Always throw this error';
    throw new Exception($error);

    echo 'Never executed';
//} catch ($Exception $e) {
    echo 'Caught exception: '.$e->getMessage()."\n";
//}

echo "hello  world";
