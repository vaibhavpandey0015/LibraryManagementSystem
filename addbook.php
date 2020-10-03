<html>
<?php
   include('session1.php');
?>
<head>
<title>Library Management System </title>
</head>

<body style="border:3; border-style:solid">
<table height="100%" width="100%">
		<tr height="20%">
			<td><h1 align="center">LIBRARY MANAGEMENT SYSTEM </h1><hr></td>
		</tr>
		
		<tr height="10%">
			<td>
			<div>
				&nbsp &nbsp &nbsp <a href="home2.php"><img src="img/1.png">Home</a>&nbsp &nbsp &nbsp 
			<a href="profile1.php"><img src="img/11.png">Profile</a>&nbsp &nbsp &nbsp 
   			<a href="issue1.php"><img src="img/6.png">Issue and Return Books</a>&nbsp &nbsp &nbsp 
			<a href="students.php"><img src="img/1.png">Register Students</a>&nbsp &nbsp &nbsp 
			<a href="available2.php"><img src="img/5.png">Available Books</a>&nbsp &nbsp &nbsp  
   			<a href="notification2.php"><img src="img/9.png">Notification and Updates</a>&nbsp &nbsp &nbsp 
   			<a href="logout1.php"><img src="img/8.png">Logout</a>
			<h4 align="right">Welcome <?php echo $_SESSION['login_admin']; ?></h4>
			</div><hr>
			</td>
		</tr>
		
		<tr height="60%">
			<td>
  <center><img src="img/vai.gif"></center><hr>
			<table align="center">
					<caption><h1><u>Issue Books</u></h1></caption>
					<form method="post" action="fromaddbook.php"> 
					<tr><td>College Id:</td><td><input type="text" name="id1"></td></tr>
					<tr><td>Name of the student:</td><td><input type="text" name="nos"></td></tr>
					<tr><td>Name of the Book:</td><td><input type="text" name="nob"></td></tr>
					<tr><td>Bookno.:</td><td><input type="text" name="bn"></td></tr>
					<tr><td>Date of issue:</td><td><input type="text" value="yyyy-mm-dd" name="doi"></td></tr>
					<tr><td>Date of submission:</td><td><input type="text" value="yyyy-mm-dd" name="dos"></td></tr>
					<tr><td>fine:</td><td><input type="text" name="fine"></td></tr>
					
					<tr><td> <input type="submit" name="submit" value="ADD"></td><td><input type="reset" name="cancel" value="Cancel"></td></tr>
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