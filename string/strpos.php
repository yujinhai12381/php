<?php
#########################################################################
# File Name: strpos.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 二  9/ 5 11:56:14 2017
#########################################################################
$mystrings = [
    '测试',
    '测试alll',
    '测试哈',
    '哈测试哈',
    '哈测h试哈',
];
$findme   = '测试';
foreach ($mystrings as $v) {
    error_log("-------------------");
    error_log(" $v :");
    mystrpos($v, $findme);
    error_log("-------------------");
}

function mystrpos($mystring, $findme) {
    $pos = strpos($mystring, $findme);

    // 使用 !== 操作符。使用 != 不能像我们期待的那样工作，
    // 因为 'a' 的位置是 0。语句 (0 != false) 的结果是 false。
    if ($pos !== false) {
        echo "The string '$findme' was found in the string '$mystring'";
        echo " and exists at position $pos";
    } else {
        echo "The string '$findme' was not found '$mystring'";
    }
}

