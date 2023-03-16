
<?PHP

$server = 'localhost';
$username = 'root';
$password = 'aditya150903';
$database = 'jaswanth';
$conn = new mysqli($server, $username, $password, $database,4307) or die("not connected");
echo "connected";

// $fn =$_POST['firstname'];
// $ln = $_POST['lastname'];
// $em   = $_POST['email'];
// $pass = $_POST['password'];
// $sql="INSERT INTO `users` (`firstname`, `lastname`,`email`,`password`) VALUES ('$fn', '$ln','$em','$pass');";
$result = mysqli_query($conn,"SELECT * FROM users");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Emial</th>
<th>Password</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
