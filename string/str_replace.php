<?php
#########################################################################
# File Name: str_replace.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 日  5/14 15:24:38 2017
#########################################################################

class StrProccess {
    public function strTransForm( $str ) {
        if (empty($str)) {
            return '';
        }

        $strNull = str_replace("_", " ", $str);
        $strUcword = ucwords($strNull);
        $ret = str_replace(" ", "", $strUcword);

        return $ret;
    }
}

$string1 = "hello_world";
$strProccess = new StrProccess();
$ret = $strProccess->strTransForm($string1);
print_r($ret);

error_log("------------------------------\n");
$string2 = "haha_hehe_heihei";
$ret2 = $strProccess->strTransForm($string2);
var_dump($ret2);


