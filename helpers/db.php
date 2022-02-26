<!-- database connection -->
<?php
$servername = "45.87.80.175";
$username = "u733134329_zandisiwendhlo";
$password = "oUXhHCa0?qC";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>