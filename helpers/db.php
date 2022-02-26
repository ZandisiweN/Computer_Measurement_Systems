<!-- database connection -->
<?php
$host = '45.87.80.175:3306';
$db = 'u733134329_mydatabase';
$user = 'u733134329_zandisiwendhlo';
$pass = 'oUXhHCa0?qC';
$port = "3306";
$charset = 'utf8mb4';
// connect to the database $conn=mysqli_connect($host, $user, $pass, $db); // check connection if
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

// write query for all pizzas
// $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
$sql = 'SELECT * FROM hosts';

// // get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// // fetch the resulting rows as an array
$hosts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// // free the $result from memory (good practise)
mysqli_free_result($result);


mysqli_close($conn);