<html>
<body>
<?php
session_start();
$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="iip"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$loc=$_POST['location'];
$city=$_POST['city'];
$fileName = basename($_FILES['image']['name']); 
$fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
$image = $_FILES['image']['tmp_name']; 
$imgContent = addslashes(file_get_contents($image));
$user=$_SESSION['id'];
$v="n";
$sql="insert into report(location,image,user,claimed,city) values('$loc','$imgContent','$user','$v','$city')";
$result=mysqli_query($con,$sql);
if($result){
	header("Location:homepage.php");
}
else
	echo "Incorrect username or password";
	echo "<script>setTimeout(\"location.href = 'report1.php';\",3000);</script>";
mysqli_close($con);
?>
</body>
</html>