<?php 


// function checkStatus($hostname){
//     // import connection
//     if($hostname){  
// $port = '80';
// {
// $fp = @fsockopen($hostname, $port, $errno, $errstr, 30);
// echo 'Host '.$hostname.':'.$port.' is ';
// if ($fp) { echo 'OK'; } else { echo ' out-of-order '; }
// if (!$fp) { echo "$errstr ($errno)"; }
// }
// }}
  

$dbhost="45.87.80.175"; $dbuser="u733134329_zandisiwendhlo"; $dbpassword="oUXhHCa0?qC"; $dbname="u733134329_mydatabase";
$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$connection) {
echo " MySQL Connection error." . PHP_EOL;
echo "Errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Error: " . mysqli_connect_error() . PHP_EOL;
exit;
}

$result = mysqli_query($connection, "SELECT * FROM hosts") or die ("DB error: $dbname");
print "<TABLE CELLPADDING=5 BORDER=1>";
print "<TR class="table-primary"><TD>id</TD><TD>Address</TD><TD>Status</TD></TR>\n";
while($row = mysqli_fetch_array($result)) {
    $id = $row[0];
    $address = $row[1];
    $port = 80;
    $fp = @fsockopen($address,$port,$errno,$errstr,30);
    if($fp){$info="ok";}else{$info="down";}print"<TR><TD>$id</TD><TD>$address</TD><TD>$info</TD></TR>\n";
}
print "</TABLE>";
mysqli_close($connection);

?>