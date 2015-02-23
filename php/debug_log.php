<?php

function debugLog(){

	$args = func_get_args();

	$logFileName = 'debug_log.txt';
	$logDir = './';     //適宜
	$logFile = $logDir.$logFileName;

	ob_start();

	foreach($args as $arg){
		var_dump($arg);
	}

	$logHead = date('[Y-m-d H:i:s]');
	$logHead .= sprintf('[remote_address: %s]', $_SERVER['REMOTE_ADDR']);
	$logText = $logHead."\n".ob_get_contents()."\n";

	ob_end_clean();

	file_put_contents($logFile, $logText, FILE_APPEND);     //FILE_APPEND⇒上書きではなく追記

}

?>
