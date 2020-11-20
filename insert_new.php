<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'mesa.mysql.database.azure.com', 'it63070139@mesa', 'TLSqeq45', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];
$id = $_GET['id'];


$sql = "UPDATE 'guestbook' SET 'Name'=$name, 'Comment'=$comment, 'Link'=$link WHERE id=$id";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>