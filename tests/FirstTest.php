<?php
#########################################################################
# File Name: FirstTest.php
# Desc: 
# Author:yujinhai
# mail: yujinhai12381@126.com
# Created Time: 二  8/15 17:40:24 2017
#########################################################################
#
class FirstTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){ }

    public function tearDown(){ }

    public function testHello()
    {
        $ret = [];
        $this->assertEmpty($ret);
    }
}

