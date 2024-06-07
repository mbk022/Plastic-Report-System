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

        }body{
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


	</style>
	
	<script type="text/javascript">
		
		function validate(){
			username=document.getElementById("username").value;
			password=document.getElementById("password").value;
			if(test1(username)){
				if(test2(password)){
					return true;
				}
			}
			return false;
		}

		function test1(username){
			if(username==""){
				alert("Please enter Username");
				return false;
			}
			else{
				return true;
			}
		}
		function test2(password){
			if(password==""){
				alert("Please enter Password");
				return false;
			}
			else{
				return true;
			}
		}
		

	</script>
	<body>
		<div>
  <div class="topnav">
  	<h1> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;  PLASTIC REPORT SYSTEM </h1>
    <a id="active" href="report1.php"> Report </a>
    <a href="redeemvouchers.php"> Redeem </a>
    <a href="login.html"> Logout </a>
  </div>
</div><br/><br/>

</head>
	<body>
		<table bgcolor="grey" align="center" border="0" cellspacing="0">
			<tr>
				<td>
		<form name="report" method="post" enctype="multipart/form-data" action="report.php">
			<table  width="100%" align="center" border="0" cellpadding="10">
				<tr>
					<td align="center" colspan="3"><strong><h2> REPORT </h2></strong></td>
				</tr>
				<tr>
					<td> Address </td>
					<td>:</td>
					<td><input type="text" id="location" name="location"></td>
				</tr>
				<tr>
					<td> City </td>
					<td>:</td>
					<td><input type="text" id="city" name="city"></td>
				</tr>
				<tr>
					<td>Upload Image </td>
					<td>:</td>
					<td><input type="file" id="image" name="image" accept="image/*"></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><button type="submit" value="Submit" onclick="return validate()"> Report </td>
				</tr>
				
			</table>
		</form>
	</td>
</tr>
</table>
			
	</body>
</html>