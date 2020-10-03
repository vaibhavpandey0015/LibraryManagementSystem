<html>
<?php
   include('session1.php');
?>
<head>
<title>Library Management System </title>
</head>

<body>
<table height="100%" width="100%">
		<tr height="20%">
			<td><h1 align="center">LIBRARY MAANGEMENT SYSTEM </h1><hr></td>
		</tr>
		
		<tr height="10%">
			<td>
			<div>
			<a href="home2.php">Home</a>&nbsp &nbsp &nbsp 
   			<a href="issue1.php">Issue and Return Books</a>&nbsp &nbsp &nbsp 
			<a href="students.php">Register Students</a>&nbsp &nbsp &nbsp 
			<a href="available2.php">Available Books</a>&nbsp &nbsp &nbsp  
   			<a href="notification2.php">Notification and Updates</a>&nbsp &nbsp &nbsp 
   			<a href="logout1.php">Logout</a>
			<h4 align="right">Welcome <?php echo $_SESSION['login_admin']; ?></h4>
			</div><hr>
			</td>
		</tr>
		
		<tr height="60%">
			<td>
  
			<table align="center">
					<caption><h1><u>Add Notification</u></h1></caption>
					<form method="post" action="fromadd.php"> 
					<tr><td>Sr.no.</td><td><input type="text" name="Srno"></td></tr>
					<tr><td>Notification:</td><td><textarea name="note"></textarea></td></tr>
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
				<p style="margin: 0 100px">"Group no.1" "INFORMATION TECHNOLOGY BRANCH" "4th semester" .</p><br>
				</div>
			</td>
		</tr>
</table>

</body>
</html>