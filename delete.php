<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'it63070097.mysql.database.azure.com', 'Butthachai@it63070097', 'It63070097', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "DELETE FROM guestbook WHERE Name='$name'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>