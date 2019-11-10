<?php

class input{
	function post($content){
	if ($content == ''){
		return false;
	}
	

	$n = [
		'abc',
		'123',
		'qwe'
	];

	foreach ($n as $name) {
	if($content == $name){
		return false;
	}}
	return true;

}
}

?>