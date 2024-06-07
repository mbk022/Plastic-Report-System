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
$v="y";
$loc1=$_SESSION['loc'];
$com=$_SESSION['comid'];
$email=$_SESSION['email'];

    $sql="update report set claimed='$v',company='$com' where location='$loc1'";
    $result=mysqli_query($con,$sql);
    //$f=mysqli_rows_affected($result);
    $sql1="select * from user where email='$email'";
        $result1=mysqli_query($con,$sql1);
        $row=mysqli_fetch_array($result1);
        $points=$row['points'];
    if($result){
        $points= $points + 50;
        $sql2="update user set points='$points' where email='$email'";
        $result2=mysqli_query($con,$sql2);
        //$f1=mysqli_affected_rows($con);
        if($result1){
            if($result2){
                header("Location:claimreports.php");
            }else{
                echo "Error".$con->error;
                echo "<script>setTimeout(\"location.href = 'claimreports.php';\",1500);</script>";
            } 
        }else{
            echo "Error".$con->error;
            echo "<script>setTimeout(\"location.href = 'claimreports.php';\",1500);</script>";
        } 
        
    }else{
        echo "Error".$con->error;
        echo "<script>setTimeout(\"location.href = 'claimreports.php';\",1500);</script>";  
    }
?>