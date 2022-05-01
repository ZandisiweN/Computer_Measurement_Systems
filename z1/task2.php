<?php include '../partials/header.php' ?>
<?php 
$dbhost="45.87.80.175"; $dbuser="u733134329_zandisiwendhlo"; $dbpassword="9V^qNn4s"; $dbname="u733134329_mydatabase";
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
echo " MySQL Connection error." . PHP_EOL;
echo "Errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
$result = mysqli_query($conn, "SELECT * FROM hosts") or die ("DB error: $dbname");
print "<table class = table table-success table-striped>";
print "<TR><TD>id</TD><TD>Address</TD><TD>Status</TD></TR>\n";
while ($row = mysqli_fetch_array ($result)) {
$id = $row[0];
$address = $row[1];
$port = 80;
$fp = @fsockopen ($address,$port,$errno,$errstr, 30);
if($fp){$info="ok";}else{$info="down";}
print "<TR><TD>$id</TD><TD>$address</TD><TD>$info</TD></TR>\n";
}
print "</table>";
mysqli_close($conn);
?>

