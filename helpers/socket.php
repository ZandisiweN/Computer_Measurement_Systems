<!-- Check for host -->
 <?php 
$host = 'fb.com';
$port = '80';
{
$fp = @fsockopen($host, $port, $errno, $errstr, 30);
echo 'Host '.$host.':'.$port.' is ';
if ($fp) { echo 'OK'; } else { echo ' out-of-order '; }
if (!$fp) { echo "$errstr ($errno)"; }
}


