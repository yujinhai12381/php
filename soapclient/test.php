<?php
#########################################################################
# File Name: test.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 2018年04月02日 星期一 12时15分22秒
#########################################################################

$client = new SoapClient("http://localhost/code/soap.wsdl");
$something =  $client->HelloWorld(array());
echo $something->HelloWorldResult;
die();


