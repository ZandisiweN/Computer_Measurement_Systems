<?php
include '../partials/header.php';
$ipaddress = $_SERVER["REMOTE_ADDR"];

function ip_details($ip)
{
  $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
  $details = json_decode($json);
  return $details;
}

$details = ip_details($ipaddress);

?>

<div class="container">
  <h1 class="text-center mt-3 mb-5">List of hosts</h1>
  <table class="table table-hover ">
    <thead>
      <tr>
        <th scope="col">Region</th>
        <th scope="col">Country</th>
        <th scope="col">City</th>
        <th scope="col">Location</th>
        <th scope="col">Ip</th>
      </tr>
    </thead>
    <tbody>
      <?php ?>
      <tr class="table-active">
        <th scope="row"><?php echo $details->region ?></th>
        <td><?php echo $details->country ?></td>
        <td><?php echo $details->city ?></td>
        <td><?php echo $details->loc ?></td>
        <td><?php echo $details->ip ?></td>
      </tr>
    </tbody>
  </table>
</div>

<? include '../partials/footer.php' ?>