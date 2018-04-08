<?php
#########################################################################
# File Name: test.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 2018年04月08日 星期日 11时26分37秒
#########################################################################

$str = "apple";

$ret = md5($str, true);

error_log(strlen($ret));

