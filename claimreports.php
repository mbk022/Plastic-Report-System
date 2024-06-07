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
			background-color:blue;
		}
        #active{
            background-color: green;

        }
		.table{
			border:2px solid white;
			margin-left: auto;
  			margin-right: auto;
			  text-align: left;
			  padding: 10px;
			  border-spacing: 10px;
		}
		td{
			column-span: 3;
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
&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<h2>&emsp; &emsp; &emsp; &emsp;Enter a city name to search</h2>
<form id="searchform" action="claimreports.php" method="post">
&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <input type="text" name="city" id="city" placeholder="enter a city name">
    &emsp; &emsp;
    <input type="submit" name="search" id="search" value="search">
    </form>


    </body>
    </html>
	<br><br>
<?php
if(isset($_POST['search'])){
$host="localhost"; 
$username="root"; 
$password="Mysqlpassword@Mubarakmbk1"; 
$db_name="iip"; 
$v="n";
$con = mysqli_connect("$host", "$username", "$password", $db_name);
if(!$con){
	die("cannot connect");
}
$city=$_POST['city'];
$sql="select * from report where city='$city' and claimed='$v'";
$result=mysqli_query($con,$sql);
echo "<table class='table'>";
echo "<form method='post' action='claimreports2.php'>";
echo "<tr id='c'><td> Location </td><td>City</td><td> View</td></tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr><td>". $row['location'] . "</td><td>" . $row['city'] . "</td><td> <input type=submit name='view' id='view' value='$row[location]'</td></tr>";
    
    
}
echo "</table>";
}

?>
