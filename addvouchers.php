
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
$vouchername=$_POST['vouchername'];
$voucherinfo=$_POST['voucherinfo'];
$validity=$_POST['validity'];
$vouchercode=$_POST['vouchercode'];
$com=$_SESSION['comid'];
$points=$_POST['points'];
$r="n";
$sql="insert into voucher(name,voucherinfo,validity,vouchercode,company,points,redeemed) values('$vouchername','$voucherinfo','$validity','$vouchercode','$com','$points','$r')";
$result=mysqli_query($con,$sql);
if($result){
	header("location:addvouchers1.php");
}else{
	echo "Error".$con->error;
    echo "<script>setTimeout(\"location.href = 'companyhp.php';\",1500);</script>";

}
mysqli_close($con);
?>
