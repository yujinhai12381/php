<?php
#########################################################################
# File Name: SumTest.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Fri 30 Oct 2015 02:32:20 PM CST
#########################################################################
require_once ("./Sum.php");

Class SumTest extends PHPUnit_Framework_TestCase {

    public function testOne() {
        print "\ntest One======================\n";
            $sum = new Sum(1, 2);
            echo $sum->sum();
    }

    public function testTwo() {
        print "\ntest Two======================\n";
        $sum = new Sum(2, 101);
        echo $sum->sum();
    }
  
}
