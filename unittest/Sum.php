<?php
#########################################################################
# File Name: TestClass.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Fri 30 Oct 2015 10:53:49 AM CST
#########################################################################

Class Sum {
    private $_numA;
    private $_numB;

    public function __construct($a, $b) {
        $this->_numA = $a;
        $this->_numB = $b;
    }

    public function sum () {
        error_log("yujinhai  test  phpunit");
        return $this->_numA + $this->_numB;
    }

    //test

}
