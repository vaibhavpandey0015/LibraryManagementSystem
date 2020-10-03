<?php
$sr=$_POST['Srno'];
$notice=$_POST['note'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("register",$con)or die(mysql_error());
$str="insert into notification values('$sr','$notice')";
$res=@mysql_query($str)or die(mysql_error());
if($res>0)
{
	echo("Notification added successfully");
}

?>





