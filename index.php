<?php

include_once ("conf.php");
include_once ("lib/SessionC.php");
include_once ("lib/CookieC.php");
include_once ("lib/Mysql.php");
include_once ("lib/Postgres.php");
include_once ("lib/iWorkData.php");

session_start();

//Cookie
$cookies = new CookieC();
$cookies->saveData("key","cookie");
$cookieGet = $cookies->getData("key");
$cookies->deleteData("key");
$cookieDel = $cookies->getData("key");

//Session
$session = new SessionC();
$session->saveData("data","session");
$sessionGet = $session->getData("data");
$session->deleteData("data");
$sessionDel = $session->getData("data");

//Mysql
//$mysql = new Mysql();
//$mysql->saveData("`key`,`data`", "'user12','test12'");
//$mysqlGet = $mysql->getData(" 'user12' ");
//$mysql->deleteData("'user12'");

//Postgres
$postgres = new Postgres();
$postgres->saveData("key,data", "user12,test12");
$postgresGet = $postgres->getData(" 'user12' ");
$postgres->deleteData("'user12'");


include_once ("template/index.php");
