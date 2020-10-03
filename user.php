<?php
 
   $con=@mysql_connect("localhost","root","") or die(mysql_error());
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
   $id=$_POST['id1'];
   $pass=$_POST['pass1'];
   $db=@mysql_select_db("register",$con)or die(mysql_error());
   $sql="SELECT * FROM register WHERE CollegeID='$id' and Password='$pass'";
   $result=mysql_query($sql);
  
   
   $row = mysqli_fetch_array($result);
      $active = $row['active'];
      
      $count = mysql_num_rows($result);
      
  
      if($count == 1) 
      {
         session_start();
		 
         $_SESSION['login_user'] = $id;
		 echo $_SESSION['login_user'];
         
         header("location: home1.php");
      }

      else
      {
         $error = "Your CollegeID or Password is invalid";
      }
}
?>
<html>
<head>
      <title>User-Login LBMS</title>
      
      
</head>

<body style="border:3; border-style:solid">
<table height="100%" width="100%">
		<tr height="20%">
			<td><h1 align="center">LIBRARY MANAGEMENT SYSTEM </h1><hr></td>
		</tr>
		
		<tr height="10%">
			<td>
			<div>
			&nbsp &nbsp &nbsp <a href="home.php"><img src="img/1.png">Home</a>&nbsp &nbsp &nbsp 
   			<a href="user.php"><img src="img/3.png">User login</a>&nbsp &nbsp &nbsp 
   			<a href="admin.php"><img src="img/2.png">Admin login</a>&nbsp &nbsp &nbsp 
   			<a href="register.php"><img src="img/4.png">Register</a>&nbsp &nbsp &nbsp 
   			<a href="available1.php"><img src="img/5.png">Available Books</a>
			</div><hr>
			</td>
		</tr>
		
		
		<tr height="60%">
			<td>
				<center><img src="img/vai.gif"></center><hr>
				<table align="center" style="border:2px solid black ; border-collapse:collapse">
					<caption><h1><u>User Log-In</u></h1></caption>
					<form method="post" action=""> 
					<tr><td>CollegeID:</td><td><input type="text" name="id1"></td></tr>
					<tr><td>Password:</td><td><input type="password" name="pass1"></td></tr>
					<tr><td> <input type="submit" name="submit" value="Login"></td><td><input type="reset" name="cancel" value="Cancel"></td></tr>
					</form>
			    </table><hr>
				
			</td>
		</tr>
		

		<tr height="10%">
			<td width="50%" height="20%"  colspan="3">
				<div style="float: left">
				<p>
				<a href="https://www.facebook.com"><img src="img/E.jpg"></a>
				<a href="https://twitter.com"><img src="img/A.jpg"></a>
				<a href="https://www.linkedin.com"><img src="img/C.jpg"></a>
				<a href="https://www.youtube.com"><img src="img/D.jpg"></a>
				<a href="https://www.instagram.com"><img src="img/F.jpg"></a>
				</p>
				</div>
				<div align="right"><br>
				<h3 style="margin: 0 100px">"Group no.1" "INFORMATION TECHNOLOGY BRANCH" "4th semester" .</h3><br>
				</div>
			</td>
		</tr>
</table>

</body>
</html>