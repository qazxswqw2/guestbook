<?php


$host = "127.0.0.1";
$dbuser = 'root';
$dbpwd = '';
$dbname = 'myphp';
$db = new mysqli( $host, $dbuser, $dbpwd, $dbname);

if ( $db->connect_errno <> 0) {
	die('fail to connet to the database');
	}

$db->query("SET NAMES UTF8");




