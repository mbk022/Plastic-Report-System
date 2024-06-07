<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			margin:0;
			font-family: Arial,Helvetica,sans-serif;
			background-color:black;
			color:white;
		}

		.topnav{
			overflow:hidden;
			text-align:right;
		}

		.topnav h1{
			float:left;
			color:#f2f2f2;
			text-align:center;
			padding:8px 16px;
			text-decoration:none;
		}

		.topnav a{
			float:right;
			color:#f2f2f2;
			text-align:center;
			padding:35px 25px;
			text-decoration:none;
			font-size:20px;
		}

		.topnav a:hover{
			background-color:#04AA6D;
			color:black;
		}

		.topnav a.active{
			background-color:#04AA6D;
			color:white;
		}


		.active,.dot:hover{
			background-color:#717171;
		}

		q{font-style:italic;}

		.author{color:cornflowblue;}

		h1{
			text-align: center;
		}
        #c{
            font-weight: bold;
            background-color: blue;
        }
        table{
			border:2px solid white;
			margin-left: auto;
  			margin-right: auto;
			  text-align: left;
			  padding: 10px;
			  border-spacing: 10px;
		}
		#active{
            background-color: green;

        }
        

	</style>
	<body>
		<div>
  <div class="topnav">
  	<h1> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;  PLASTIC REPORT SYSTEM </h1>
	  <a href="report1.php"> Report </a>
    <a id="active" href=""> Redeem </a>
    <a href="login.html"> Logout </a>
  </div>
</div><br/><br/>
<?php
$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="iip"; 
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$points=$_SESSION['points'];
$email=$_SESSION['id'];
$vname=$_POST['claim'];
$sql="select * from voucher where name='$vname'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$req=$row['points'];
$code=$row['vouchercode'];
$v='y';
if($points>$req){
	$newpoints=$points-$req;
	$sql1="update voucher set redeemed='$v' where name='$vname'";
	$result1=mysqli_query($con,$sql1);
	if($result1){
		$sql2="update user set points='$newpoints' where email='$email'";
		$result2=mysqli_query($con,$sql2);

		if($result2){
			echo "<table><tr id=c><td>Voucher name</td><td>Voucher info</td><td>Validity</td><td>Points Required</td><td>Voucher Code</td></tr>";
			echo "<tr><td>". $row['name']."</td><td>".$row['voucherinfo']."</td><td>". $row['validity']."</td><td>". $row['points']."</td><td>". $row['vouchercode']."</td></tr>";
			echo "<tr><td><input type=button value=copyVoucherCode name=copy onclick=copyText()></button></td></tr></table>";

			echo "<a href=homepage.php>Home Page</a>";
		}
	}
}
?>
<script type="text/javascript">
	<?php
       echo "var jsvar ='$code';";
   ?>
function copyText(){
jsvar.select();
document.execCommand("copy");
}
</script>
