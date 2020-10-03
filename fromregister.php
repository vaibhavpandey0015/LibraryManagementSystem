<?php

$nm=$_POST['name1'];
$ln=$_POST['last1'];
$id=$_POST['id1'];
$sem=$_POST['sem1'];
$gen=$_POST['gender'];
$mob=$_POST['mob1'];
$mail=$_POST['mail1'];
$city=$_POST['city1'];
$pass=$_POST['pass1'];

$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("register",$con)or die(mysql_error());
$str="insert into register values('$nm','$ln','$id','$sem','$gen','$mob','$mail','$city','$pass')";
$res=@mysql_query($str)or die(mysql_error());
if($res>0)
{
	header("location:home.php");
}

?>

