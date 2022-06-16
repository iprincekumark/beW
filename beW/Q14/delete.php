<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST['name'];
 require 'partials/_db_connect.php';
 $sql = "delete from `student` where `name`='$name'";
 $result = mysqli_query($conn, $sql);
 if($result) {
 echo "<script>
alert('Deletion Successful');
</script>";
}else {
 echo "<script>
alert('User Not Found');
</script>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete</title>
<style>
a{
 font-size:25px;
 }
</style>
</head>
<body>
<h2>
<a href="/anant/registration/Welcome.php">Home</a>
</h2>
<form action="delete.php" method="post">
<label for="name">Name:</label>
<input type="text" placeholder="Enter Name" name="name">
<button type="submit">Delete</button>
</form>
</body>
</html>