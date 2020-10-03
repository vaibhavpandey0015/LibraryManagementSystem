<html>
<head>
<title>Register page- LBMS</title>
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
					<caption><h1><u>REGISTER</u></h1></caption><br>
					<form method="post" action="fromregister.php">
					<tr><td>First name:</td><td><input type="text" name="name1"></td></tr>
					<tr><td>Last name:</td><td><input type="text" name="last1"></td></tr>
					<tr><td>College ID:</td><td><input type="text" name="id1"></td></tr>
					<tr><td>Semester:</td><td><input type="radio" name="sem1" value="I">I <input type="radio" name="sem1" value="II">II <input type="radio" name="sem1" value="III">III <input type="radio" name="sem1" value="IV">IV <input type="radio" name="sem1" value="V">V <input type="radio" name="sem1" value="VI">VI <input type="radio" name="sem1" value="VII">VII <input type="radio" name="sem1" value="VIII">VIII</td></tr>
					<tr><td>Gender:</td><td><input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female</td></tr>
					<tr><td>Mobile no.:</td><td> <input type="text" name="mob1"></td></tr>
					<tr><td>Email:</td><td> <input type="text" name="mail1"></td></tr>
					<tr><td>City:</td><td><select name="city1"><option>-</option><option>Mumbai</option><option>Pune</option><option>Nagpur</option></select></td></tr>
					<tr><td>Password:</td><td><input type="text" name="pass1"></td></tr>
					<tr><td colspan="2"><table><tr><td><input type="submit" value="SUBMIT"></td><td><input type="reset" value="CANCLE"></td></tr></table></td></tr>
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