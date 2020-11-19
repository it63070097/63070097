<html>
<head>
<title>How are you today</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070097.mysql.database.azure.com', 'Butthachai@it63070097', 'It63070097', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN !: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<div class="container">
    <div class="form">
        <p class="ex1"><h1><center>What your doing today?</center></h1></p>
    </div>
  <table width="800" border="1" class="table table-dark table-hover table-striped" class="center" >
    <thead class="thead-dark">
    <tr class="active">
      <th width="200"> <div align="center">Name</div></th>
      <th width="500"> <div align="center">Felt</div></th>
      <th width="100"> <div align="center">Action</div></th>
    </tr>
     </thead>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><center><?php echo $Result['Name'];?></center></td>
      <td><center><?php echo $Result['Comment'];?></center></td>
      <td><center><a href="formedit.php"><input type="submit" value="Edit" class="btn-info"></a>&nbsp;&nbsp;<a href="fromdelete.php"><input type="submit" value="Delete"  class="btn-danger"></a></center></td>
    </tr>
  <?php
  }
  ?>
  </table>
  <a href="insert.php"><input type="submit" value="ADD" class="btn-default btn-sm"></a>
  <?php
  mysqli_close($conn);
  ?>
</div>
</body>
</html>
