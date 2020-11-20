<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'mesa.mysql.database.azure.com', 'it63070139@mesa', 'TLSqeq45', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id = $_POST["id"];

$sql = "DELETE FROM guestbook WHERE id=$id";


if (mysqli_query($conn, $sql)) 
{
  echo "Record delete successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
