<?php
$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="iip"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$name=$_POST['name'];

$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];

$sql="insert into user(Name,dob,mobile,email,password) 
values('$name','$dob','$mobile','$email','$password')";
$result=mysqli_query($con,$sql);
if($result){
	header("location:login.html");
}else{
	echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'userregister.html';\",1500);</script>";

}
mysqli_close($con);
?>