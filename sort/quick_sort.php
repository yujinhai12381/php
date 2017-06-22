<?php
#########################################################################
# File Name: quick_sort.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 五  5/26 10:51:15 2017
#########################################################################

//函数实现快速排序
function quick_sort($arr)
{
    //判断参数是否是一个数组
    if ( !is_array($arr) ) return false;
    //递归出口:数组长度为1，直接返回数组
    $length = count($arr);
    if ( $length <= 1 ) return $arr;
    //数组元素有多个,则定义两个空数组
    $left = $right = array();
    //使用for循环进行遍历，把第一个元素当做比较的对象
    for($i = 1; $i < $length; $i++)
    {
        //判断当前元素的大小
        if($arr[$i] < $arr[0]){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }

    $left = quick_sort($left);
    $right = quick_sort($right);

    return array_merge($left, array($arr[0]), $right);
}

$arr = array(6, 1, 85, 8 , 23);
$ret = quick_sort($arr);
var_dump($ret);

