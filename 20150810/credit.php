<?php
#########################################################################
# File Name: credit.php
# Desc: 
# Author: yujinhai
# mail: yujinhai12381@126.com
# Created Time: Mon 10 Aug 2015 10:17:00 AM CST
#########################################################################

for ($estimate = 60; $estimate <= 70; $estimate++) {
    $bankfirst = $estimate*0.3; 
    $cashfirst = 76 - $estimate;
    $totalfirt = $bankfirst + $cashfirst;
    $credit = $estimate-$bankfirst;
    error_log("评估金额：{$estimate},首付款：{$totalfirt},贷：{$credit}, 准备银行：{$bankfirst},现金:{$cashfirst},");
}
