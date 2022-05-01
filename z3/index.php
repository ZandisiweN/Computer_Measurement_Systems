<?php include '../partials/header.php';

$time = date('H:i:s', time());


$user = $_POST['user'];
$post  = $_POST['post'];
if (isset($_POST['post']) && isset($_POST['user']))
{
$text = "<tr class='table-active'>
      <td>$user</td>
      <td>$post</td>
      <td>$time</td>
    </tr>";
$file = fopen ("./conversation.php", "a+");
fwrite ($file, $text);
}
?>
<form method="POST" style="width:50%; margin: auto; font-family: 'Poppins', sans-serif;"
><br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nickname</label>
    <input type="text" name = "user" class="form-control">
  </div>
  <div class="mb-3">
    <label for="Post" class="form-label">Post</label>
    <input type="text" name="post" class="form-control" >
  </div>
  <input type="submit"  class="btn btn-primary"></input>
</form>
  <br>
<h3 class="text-center mt-5" style="font-family: 'Poppins', sans-serif;">Posts:</h3>
<div class="container mt-5" style="font-family: 'Poppins', sans-serif;">
<table class='table'>
<thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">Post</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
  <?php include "./conversation.php"?>
  </tbody>
</table>
</div>

