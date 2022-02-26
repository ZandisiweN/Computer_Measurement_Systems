<?php

function checkConn($host)
{
  $port = 80;
  $timeout = 30;

  $sk = fsockopen($host, $port, $errnum, $errstr, $timeout);
  if (!is_resource($sk)) {
    echo '<span class="badge bg-danger">Out of order</span>';
  } else {
    echo '<span class="badge bg-success">Connected</span>';
  }
}