<?php

include('input.php');
include('connect.php');

$time = time();
$content = $_POST['content'];
$user = $_POST['user'];


$input = new input();

$is = $input->post($content);
if ($is == false){
	die('empty message!');
}

$is = $input->post($user);
if ($is == false){
	die('empty username!');
}




$sql = "INSERT INTO msg (content, user, intime) VALUES ('{$content}', '{$user}', '{$time}')";



if ($sql == false){
	echo"sql error";
	exit;
}

$res = $db->query($sql);

header("location: guestbook.php");

?>