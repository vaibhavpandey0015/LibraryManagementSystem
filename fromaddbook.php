<?php


$id=$_POST['id1'];
$nos=$_POST['nos'];
$nob=$_POST['nob'];
$bn=$_POST['bn'];
$doi=$_POST['doi'];
$dos=$_POST['dos'];
$fine=$_POST['fine'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db("register",$con)or die(mysql_error());
$str="insert into notification values('$id','$nos','$nob','$bn','$doi','$dos','$fine')";
$res=@mysql_query($str)or die(mysql_error());
if($res>0)
{
	echo("Notification added successfully");
}

?>





