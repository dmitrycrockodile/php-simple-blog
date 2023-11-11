<?php
   $logs = getLogs(URL_PARAMS['name']);
   $hasLogs = $logs !== null;
   $pageTitle = "Log by {$_GET['name']}";

   if ($hasLogs) {
      $pageContent = template('logs/v_log', [
         'logs' => $logs
      ]);
   }  else {
      header('HTTP/1.1 404 Not Found');
      $pageContent = template('errors/v_404');
   }
