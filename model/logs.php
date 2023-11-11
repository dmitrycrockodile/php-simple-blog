<?php
	function addLog() : string {
		$date = date("Y-d-m");
		$time = date("H:i:s");
		$userId = $_SERVER['SERVER_ADDR'];
		$uri = $_SERVER['REQUEST_URI'];
		$referer = $_SERVER['HTTP_REFERER'];
		$log = "$time;$userId;$uri;$referer\n";
		$f = fopen("./logs/$date.txt", 'a+');
		fwrite($f, $log);
		fclose($f);
		return true;
	}

	function getLogs(string $logName) : array {
		$lines = file("./logs/{$logName}.txt");
		$logs = [];
		
		foreach($lines as $line) {
			$logs[] = logStrToArr($line);
		}

		return $logs;
	}