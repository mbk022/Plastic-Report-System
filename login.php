
<?php
session_start();
?>
<html>
<body>
	<?php
$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="iip"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql=" select * from user where email='$uname' and password='$pass'";
$result=mysqli_query($con,$sql);
$f=mysqli_affected_rows($con);
if($f>0){
	$row=mysqli_fetch_array($result);
	$_SESSION['id']=$row['email'];
	header("Location:homepage.php");

}
else
	echo "Incorrect username or password";
	echo "<script>setTimeout(\"location.href = 'login.html';\",3000);</script>";
mysqli_close($con);
?>
</body>
</html>