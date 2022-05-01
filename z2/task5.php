<?php
include '../helpers/db.php';
include '../partials/header.php';

$ipaddress = $_SERVER["REMOTE_ADDR"];

$dbname = 'u733134329_mydatabase';
$username = 'u733134329_zandisiwendhlo';
$servername = "45.87.80.175";
$password = "9V^qNn4s";
// $visitors = [];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $sql = "INSERT INTO portalguests (ipaddress) VALUES ('$ipaddress')";
  // // use exec() because no results are returned
  // $conn->exec($sql);
  // echo "New record created successfully";

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM portalguests");
  $stmt->execute();
  $visitors = $stmt->fetchAll();
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
return $visitors;
?>

<div class="container">
   <h1 class="text-center mt-3 mb-5">List of visitors</h1>
   <table class="table">
     <thead class="thead-dark">
       <tr>
         <th scope="col">id</th>
         <th scope="col">ip</th>
        <th scope="col">datetime</th>
       </tr>
     </thead>
     <tbody>

   </table>
 </div>

<? include '../partials/footer.php' ?>