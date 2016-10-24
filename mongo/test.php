<?php
#########################################################################
## File Name: test.php
## Desc:
## Author:yujinhai
## mail: yujinhai@yongche.com
## Created Time: 2016年08月16日 星期二 05时05分10秒
##########################################################################
#
$manager = new \MongoDB\Driver\Manager("mongodb://10.0.11.72:27017/?replicaSet=yongche");

var_dump($manager);
$bulk = new \MongoDB\Driver\BulkWrite();
$bulk->insert(['x' => 1]);
$bulk->insert(['x' => 2]);
$bulk->insert(['x' => 3]);
$manager->executeBulkWrite('test.only', $bulk);

//$query = new MongoDB\Driver\Query([]);
//$cursor = $manager->executeQuery('test.only', $query);

//var_dump($cursor->toArray());

?>
