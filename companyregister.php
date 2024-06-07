<?php
$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="iip"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$companyname=$_POST['name'];
$companymobile=$_POST['mobile'];
$companyemail=$_POST['email'];
$password=$_POST['password'];

$sql="insert into company(companyname,companymobile,companyemail,password) 
values('$companyname','$companymobile','$companyemail','$password')";
$result=mysqli_query($con,$sql);
if($result){
	header("location:companylogin.html");
}else{
	echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'companyregister.html';\",1500);</script>";

}
mysqli_close($con);
?>