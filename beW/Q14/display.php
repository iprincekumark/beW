<?php
echo '<title>Display</title>';
echo '
<h2>
<a style="font-size:25px;" href="/anant/registration/Welcome.php">Home</a></h2>';
require 'partials/_db_connect.php';
$sql = 'SELECT * FROM student';
$result = mysqli_query($conn, $sql);
if($result) {
 $num = mysqli_num_rows($result);
if($num> 0) {
 echo '<table border="2" cellspacing="3" cellpadding="2">
<tr>
<th>Name</td>
<th>Email</td>
<th>Gender</td>
</tr>';
while($row = mysqli_fetch_assoc($result)) {
 $gen = "Male";
 if($row['gender'] == 'f') $gen = 'Female';
 echo
 '<tr>
<td>'.$row['name'].'</td>
<td>'.$row['email'].'</td>
<td>'.$gen.'</td>
</tr>';
 }
 echo '</table>';
 }
}
?>