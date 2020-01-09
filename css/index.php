<?php
	$url = 'Location: '.$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];
	if(strcmp($_SERVER['REQUEST_METHOD'],'POST')!=0){
		session_destroy();
		header($url);
		exit;
	}
?>