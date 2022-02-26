<?php
include '../db/db.php';
include '../partials/header.php';
$ipaddress = $_SERVER["REMOTE_ADDR"];

function ip_details($ip)
{
  $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
  $details = json_decode($json);
  return $details;
}

$details = ip_details($ipaddress);

$ip = $details->ip;

$visitors = [];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // // set the PDO error mode to exception
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $sql = "INSERT INTO portalguests (ip) VALUES ('$ip')";
  // // use exec() because no results are returned
  // $conn->exec($sql);
  // echo "New record created successfully";

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM portalguests");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $visitors = $stmt->fetchAll();
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
return $visitors;
?>

<div class="container">
  <h1 class="text-center mt-3 mb-5">List of visitors</h1>
  <table class="table table-hover ">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">ip</th>
        <th scope="col">datetime</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($visitors as $i => $visitor) : ?>
      <tr class="table-active">
        <th scope="row"><?php echo $visitor['id'] ?></th>
        <td><?php echo $visitor['ip'] ?></td>
        <td><?php echo $visitor['datetime'] ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<? include '../partials/footer.php' ?>