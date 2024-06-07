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
		body{
			background-color: black;
			color:white;
		}
		form{
			padding-top:100;
		}
		#reg{
			text-align:center;
			padding-left:200;
		}
		img{
			padding-left:350px;
		}
		h1,h2,p{
			text-align:center;
		}
		a{
			font-size:20px;
		}
		button{
			background-color:black;
			padding:15px 30px;
			color:white;
			text-align:center;
			margin:4px 2px;
		}
		#active{
            background-color: green;

        }s
	</style>
	
</head>


	</style>
	<body>
		<div>
  <div class="topnav">
  	<h1> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;  PLASTIC REPORT SYSTEM </h1>
    <a href="claimreports.php"> Claim Reports </a>
    <a id="active"href=""> add vouchers </a>
    <a href="companylogin.html"> Logout </a>
  </div>
</div><br/><br/>
	
		<table bgcolor="grey" align="center" border="0" cellspacing="0">
			<tr>
				<td>
		<form name="login" method="post" action="addvouchers.php">
			<table  width="100%" align="center" border="0" cellpadding="10">
				<tr>
					<td align="center" colspan="3"><strong><h2> Add Voucher</h2></strong></td>
				</tr>
				<tr>
					<td> Voucher Name </td>
					<td>:</td>
					<td><input type="text" id="vouchername" name="vouchername"></td>
				</tr>
				<tr>
					<td> Voucher Info </td>
					<td>:</td>
					<td><input type="text" id="voucherinfo" name="voucherinfo"></td>
				</tr>
				<tr>
					<td> Valid Upto </td>
					<td>:</td>
					<td><input type="date" id="validity" name="validity"></td>
				</tr>
				<tr>
					<td> Points Required </td>
					<td>:</td>
					<td><input type="number" id="points" name="points"></td>
				</tr>
				<tr>
					<td> Voucher Code </td>
					<td>:</td>
					<td><input type="text" id="vouchercode" name="vouchercode"></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><button type="submit" value="Submit" onclick="return validate()"> Add </td>
				</tr>
			</table>
		</form>
	</td>
</tr>
</table>
</body>
</html>