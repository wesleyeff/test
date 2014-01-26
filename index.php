<?php

require_once 'stuff.php';
require_once 'Class1.php';

stuff();

$obj1 = new Class1();
$obj1->var1 = __FILE__;
$obj1->init();
echo $obj1->var1;
echo time();