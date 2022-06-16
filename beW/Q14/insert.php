<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
if($gender == 'male') {
 $gender = 'm';
}else $gender = 'f';
 require 'partials/_db_connect.php';
 $sql = "INSERT INTO student(`name`, `email`, `gender`) values('$name', '$email',
'$gender')";
 $result = mysqli_query($conn, $sql);
 if($result) {
 echo "<script>
alert('Regitration Successful');
</script>";
}else {
 echo "<script>
alert('Not Registered');
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
<title>Insert</title>
<style>
 #container{
 display: flex;
 justify-content: center;
 align-items: center;
 margin-top:210px;
 }
a{
 font-size:25px;
 }
</style>
</head>
<body>
<h2>
<a href="/anant/registration/Welcome.php">Home</a>
</h2>
<div id="container">
<form action="insert.php" method="post">
<label for="name">Name :</label>
<input type="text" name="name" id="name"><br><br>
<label for="email">Email :</label>
<input type="email" name="email" id="email">
<h3>Gender</h3>
<input type="radio" name="gender" id="male" value="male">
<label for="male">Male</label>
<input type="radio" name="gender" id="female" value="female">
<label for="female">Female</label><br><br>
<button type="submit" id="btn">Submit</button>
</form>
</div>
</body>
</html>