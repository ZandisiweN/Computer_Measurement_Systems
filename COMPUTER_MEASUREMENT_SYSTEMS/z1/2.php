<?php include '../utilities/socketConnCheck.php' ?>
<?php include '../partials/header.php' ?>
<?php include '../utilities/mysqlConn.php' ?>

<div class="container">
  <h1 class="text-center mt-3 mb-5">List of hosts</h1>
  <table class="table table-hover ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">HOST</th>
        <th scope="col">STATUS</th>
        <th scope="col">ATTEMPTS</th>
      </tr>
    </thead>
    <tbody>
      <?php ?>
      <?php foreach ($hosts as $i => $host) : ?>
      <tr class="table-active">
        <th scope="row"><?php echo $host['id'] ?></th>
        <td><?php echo $host['address'] ?></td>
        <td class="address"><?php checkConn($host['address']) ?></td>
        <td class="attempts">0</td>
      </tr>
      <?php endforeach  ?>
    </tbody>
  </table>
</div>



<?php include '../partials/footer.php' ?>