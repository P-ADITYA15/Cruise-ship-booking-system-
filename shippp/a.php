
<?PHP

$server = 'localhost';
$username = 'root';
$password = 'aditya150903';
$database = 'jaswanth';
$conn = new mysqli($server, $username, $password, $database,4307) or die("not connected");
echo "PAYMENT SUCCESSFUL✅";

$namee =$_POST['card-name'];
$num = $_POST['card-number'];
$sql="INSERT INTO `ship` (`card-name`, `card-number`) VALUES ('$namee', '$num');";
$result = mysqli_query($conn,$sql);
?>