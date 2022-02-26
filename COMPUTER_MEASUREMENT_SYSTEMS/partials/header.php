<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORTUNE ZVIREGEI S130</title>
  <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.min.css">
</head>

<?php
$uri = $_SERVER['REQUEST_URI'];
?>
<?php if ($uri == '/index.php' || $uri == 'http://zapetureprojects.tech' || $uri == '/') : ?>

<?php else :?>

<button class="btn btn-primary m-3" onclick=" history.back()">Go Back</button>

<?php endif ?>

<body>