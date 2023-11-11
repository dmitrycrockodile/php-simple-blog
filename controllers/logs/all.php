<?php
   $files = scandir('logs');
   $pageTitle = 'All logs';

   $logs = array_filter($files, function($f) {
      return is_file("./logs/$f") && preg_match('/.*\.txt$/', $f);
   });

   foreach ($logs as $i => $log) {
      $logs[$i] = preg_replace('/\.txt$/', '', $log);
   }

   $pageContent = template('logs/v_logs', [
      'logs' => $logs
   ]);