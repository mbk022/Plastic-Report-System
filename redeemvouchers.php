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
        #active{
            background-color: green;

        }
        #c{
			font-weight: bold;
			background-color:blue;
		}
        .table{
			border:2px solid white;
			margin-left: auto;
  			margin-right: auto;
			  text-align: left;
			  padding: 10px;
			  border-spacing: 10px;
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
$v="n";
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$id=$_SESSION['id'];
$sql1="select * from user where email='$id'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$_SESSION['points']=$row1['points'];
echo "<h3> You have ".$row1['points']." points left </h3>";
$con1 = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con1){
	die("cannot connect");
}
$sql2="select * from voucher where redeemed='$v'";
$result2=mysqli_query($con1,$sql2);
echo "<table class='table'>";
echo "<form method='post' action='redeemvouchers2.php'>";
echo "<tr id='c'><td> Voucher Name </td><td>Voucher Info</td><td>Validity</td><td>Points Required</td><td> Claim</td></tr>";
while($row2=mysqli_fetch_array($result2)){
    echo "<tr><td>". $row2['name'] . "</td><td>" . $row2['voucherinfo'] . "</td><td>" . $row2['validity'] ."</td><td>" . $row2['points'] .  "</td><td> <input type=submit name='claim' id='claim' value='$row2[name]'</td></tr>";
    
    
}
echo "</table>";

?>
