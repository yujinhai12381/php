<?php
#########################################################################
# File Name: dir.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 日  5/14 15:53:25 2017
#########################################################################

$dirname = dirname(__FILE__);
error_log($dirname);
$d = dir($dirname);

echo "Handle: " . $d->handle . "\n";
echo "Path: " . $d->path . "\n";
while (false !== ($entry = $d->read())) {
    echo $entry."\n";
}
$d->close();



