<?php
session_start();
?>
<?php
$username=$_POST['username1'];
$pass=$_POST['pass1'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("register",$con)or die(mysql_error());
$sql="SELECT * FROM admin WHERE Username='$username' and Password='$pass'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count<1){echo "Wrong Login or Password";}
else
	{
		
			header("location:home2.php");
	}

ob_end_flush();
?>
