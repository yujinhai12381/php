<?php
#########################################################################
# File Name: soapclient.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 一  4/ 2 12:13:15 2018
#########################################################################

$client = new SoapClient("http://localhost/code/soap.wsdl");
$something =  $client->HelloWorld(array());
echo $something;
die();

