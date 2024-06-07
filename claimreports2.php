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
        

	</style>
	<body>
		<div>
  <div class="topnav">
  	<h1> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;  PLASTIC REPORT SYSTEM </h1>
    <a id="active" href=""> Claim Reports </a>
    <a href="addvouchers1.php"> add vouchers </a>
    <a href="companylogin.html"> Logout </a>
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
$loc=$_POST['view'];
$_SESSION['loc']=$loc;
$sql="select * from report where location='$loc'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$_SESSION['email']=$row['user'];

?>
<form action="claimreports3.php">
<table>
    <tr id="c">
        <td>Location</td>
        <td>City</td>
        <td>Reported by</td>
</tr>
<tr >
    <td><?php echo $row['location']?></td>
    <td><?php echo $row['city']?></td>
    <td><?php echo $row['user']?></td>
</tr>
<tr colspan=3>
    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);?>"/>
</td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="claim"></td>
</tr>
</table>
