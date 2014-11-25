<?php
require __DIR__ . '/../vendor/autoload.php';

$jak	= new JAK8583\JAK8583();

//add data
$jak->addMTI('0800');
$jak->addData(7, date("mdHis"));
$jak->addData(11, rand(1000, 999999));
$jak->addData(70, '301');

//get iso string
print $jak->getISO();
