<?php

include_once ("conf.php");
include_once ("lib/SessionC.php");
include_once ("lib/CookieC.php");
include_once ("lib/Mysql.php");
include_once ("lib/iWorkData.php");
//session_start();

//$resCookie = new CookieC();

//$resCOokieS = $resCookie->saveData('name1','result1');
//echo $resCookieS;

//$resCookieG = $resCookie->getData('name1');
//echo $resCookieG;

//$resCookieD = $resCookie->deleteData('name1');


//$results = new SessionC();

//$resS =  $results->saveData('name','result');
//$resG = $results->getData('name');
//echo $resG;
//$resD = $results->deleteData('name');
//echo $resD;

//$resG = $results->getData('name');
//echo $resG;


$mysql = new Mysql();
$result = $mysql->getData($key);
var_dump($result);

//include_once ("template/index.php");
