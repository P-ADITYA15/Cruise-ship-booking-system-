
<?PHP

$server = 'localhost';
$username = 'root';
$password = 'aditya150903';
$database = 'jaswanth';
$conn = new mysqli($server, $username, $password, $database,4307) or die("not connected");
echo "Account Successfully created ✅";
echo "<br> <br>";

echo "<a href='index.html'>🗼LOGIN🗼</a>";

$fn =$_POST['firstname'];
$ln = $_POST['lastname'];
$em   = $_POST['email'];
$pass = $_POST['password'];
$sql="INSERT INTO `users` (`firstname`, `lastname`,`email`,`password`) VALUES ('$fn', '$ln','$em','$pass');";
$result = mysqli_query($conn,$sql);

?>
