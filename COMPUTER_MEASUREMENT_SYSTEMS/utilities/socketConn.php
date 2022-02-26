<?php
$host = 'twitter.com';
$port = 80;
$timeout = 10;
$response = '';
$sk = fsockopen($host, $port, $errnum, $errstr, $timeout);
if (!is_resource($sk)) {
  // $response = "connection fail: " . $errnum . " " . $errstr;
  $response = "<span class='badge bg-danger'>Connection failed $timeout </span>";
} else {
  $response = '<span class="badge bg-success">Connected</span>';
}