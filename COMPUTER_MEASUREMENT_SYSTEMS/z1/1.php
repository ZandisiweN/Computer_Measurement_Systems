<?php include '../utilities/socketConn.php' ?>
<?php include '../partials/header.php' ?>

<div class="container mt-5">
  <div class="row">
    <?php include '../utilities/svgIcons.php' ?>
    <?php if (!is_resource($sk)) : ?>

    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
        <use xlink:href="#exclamation-triangle-fill" />
      </svg>
      <div>
        <?php echo $response ?>
      </div>
    </div> <?php else : ?>
    <div class=" alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
      </svg>
      <div>
        <?php echo $response ?>
      </div>
    </div>
    <?php endif ?>
  </div>
  <div class="row">
    <table class="table m-auto table-hover mt-5">
      <thead>
        <tr>
          <th scope="col">HOST</th>
          <th scope="col">PORT</th>
          <th scope="col">STATUS</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-active">
          <th scope="row">
            <?php echo $host ?>
          </th>
          <td> <?php echo $port ?></td>
          <td><?php echo $response ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<?php include '../partials/footer.php' ?>