<html>
<?php
   include('session.php');
?>
<head>
<title>Welcome User LBMS</title>
</head>

<body style="border:3; border-style:solid">
<table height="100%" width="100%">
		<tr height="20%">
			<td><h1 align="center">LIBRARY MANAGEMENT SYSTEM </h1><hr></td>
		</tr>
		
		<tr height="10%">
			<td>
			<div>
			&nbsp &nbsp &nbsp <a href="home1.php"><img src="img/1.png">Home</a>&nbsp &nbsp &nbsp 
   			<a href="pro1.php"><img src="img/11.png">Profile</a>&nbsp &nbsp &nbsp 
			<a href="available3.php"><img src="img/5.png">Available Books</a>&nbsp &nbsp &nbsp 
			<a href="issue.php"><img src="img/6.png">Issued Books</a>&nbsp &nbsp &nbsp 
   			<a href="notification.php"><img src="img/9.png">Notification</a>&nbsp &nbsp &nbsp 
   			<a href="logout.php"><img src="img/8.png">Logout</a>
			<h4 align="right">Welcome <?php echo $_SESSION['login_user']; ?></h4>
			</div><hr>
			</td>
		</tr>
		
		<tr height="60%">
			<td >
				<center><img src="img/vai.gif"></center><hr>
				<h3><dl>
					<dt><b>VISION:</b></dt>
					<dd><ul type="circle"><li>To be a center of excellence imparting professional education satisfying societal and global needs.</li></ul></dd>
					<dt><b>MISSION:</b></dt>
					<dd><ul type="circle"><li>Transforming student into lifelong learners through quality teaching,training and exposure to concurrent technologies</li>
										  <li>Fostering conducive atmosphere for research and development through well equipped laboratories and qualified personnel in collaboration with global organizations.</li></ul>
					</dd>
					<dd></dd></h3>
				</dl><hr>
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