<?php 

function logStrToArr(string $str) : array {
   $str = rtrim($str);
   $part = explode(';', $str);

   return ['time' => $part[0], 'userId' => $part[1], 'uri' => $part[2], 'referer' => $part[3]];
}