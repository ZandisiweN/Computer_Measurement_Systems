<?php
$result = dns_get_record("fb.com");
print_r($result);


$ip = gethostbyname(' fb.com');
echo $ip . '<BR />';
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip. '<BR />';
$hostname = gethostbyaddr("8.8.8.8");
echo $hostname. '<BR />';
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hostname;
?>
