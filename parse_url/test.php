<?php
#########################################################################
# File Name: test.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 二  5/16 11:09:19 2017
#########################################################################

$url = 'http://yujinhai.xx.haha.org/V1/HomePage/driver?city=dandong';

print_r(parse_url($url));

echo parse_url($url, PHP_URL_PATH);
echo "\n";

