<?php

include_once ("conf.php");
include_once ("lib/SessionC.php");
include_once ("lib/CookieC.php");
include
session_start();

$results = new SessionC();

$ress =  $results->saveData('name','result');
$ress = $results->getData('name');
$ress = $results->deleteData('name');

$resuilc = new CookieC();

$connect = new Mysql();
