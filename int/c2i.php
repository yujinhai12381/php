<?php

$numeric_string = '42a';
$integer        = 42;
$ret = ctype_digit($numeric_string);  // true

var_dump($ret);

