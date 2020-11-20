<html>
<head>
<title>Update</title>
</head>
<body>
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


$sql = "SELECT * FROM guestbook WHERE id=$id ";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
<form action = "insert.php" method = "post" id="CommentForm" >
  
mysqli_close($conn);
?>
<form action = "update.php" method = "POST" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" value="<?php echo$name?>" > <br>
    Comment:<br>
    <input type="text" name = "comment" value="<?php echo$comment?>" > <br>  
    Link:<br>
    <input type="text" name = "name" value="<?php echo$link?>" > <br>
    <input type="submit" id="commentBtn">
  </form> 


</body>
</html>

    