<?PHP

$server = 'localhost';
$username = 'root';
$password = 'aditya150903';
$database = 'jaswanth';
$conn = new mysqli($server, $username, $password, $database,4307) or die("not connected");


$uname =$_POST['username'];
$pass = $_POST['password'];
$result = mysqli_query($conn,"select * from users where email='$uname' and password='$pass'");
if($result){
if(mysqli_num_rows($result)>0){
    echo "<script>";
    echo "window.location.assign('home.html');";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('Incorrect details');";
    echo "window.location.assign('index.html');";
    echo "</script>";
    

}
}
?>