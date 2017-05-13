<?php
#########################################################################
# File Name: strtotime.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 六  5/13 15:57:38 2017
#########################################################################

$begin = strtotime('2011-07-01');
$end = strtotime('2017-05-13');

echo ($end-$begin)/(24*3600). "day \n"; 

