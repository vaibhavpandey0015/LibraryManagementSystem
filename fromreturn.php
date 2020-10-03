
<?php
session_start();
?>
<?php
$bn=$_POST['bookno1'];
$id=$_POST['id1'];
$con=@mysql_connect("localhost","root","") or die(mysql_error());

$db=@mysql_select_db("register",$con)or die(mysql_error());
$sql="DELETE FROM issueandreturn WHERE bookno ='$bn' and CollegeId='$id'";
$result=mysql_query($sql);
     
$count=mysql_num_rows($result);
if($count<1)
{
	echo"Error:Deleteing Record";
}
else
	{
		
			echo"Record Delete";
	}

ob_end_flush();
?>