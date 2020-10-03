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
			<td><h1 align="center">LIBRARY MANAGEMENTGEMENT SYSTEM </h1><hr></td>
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
			  <center><h2>Issued Books</h2></center>
			<table width="30%" height="15%" align="center" border="4" bordercolor="maroon" rules="none" >
		<form method="post" action="fromallissue3.php">
			<tr>
				<td>View All Books Issued <input type="Submit" value="Display"></td>
			</tr>
		</form>
</table>

	<table width="30%" height="15%" align="center" border="4" bordercolor="maroon" rules="none" >  
			<tr>
                <td colspan="2"><b>  Search  :</b></td>
            </tr>
					   					  
			<tr>
				<td align="left" > Select CollegeId:</td>
                                         
				<td >
									
					<form method="post" action="fromselectissue3.php">	
						<?php
							//============= Variables for Database ===================
							$hostname = "localhost";
							$username = "root";
							$password = "";
							$database = "register";
							//========================================================

							//Connection...
							$link = mysqli_connect($hostname, $username, $password,$database);
							$query = "select * from issueandreturn";
							$result = mysqli_query($link,$query);	

							echo "<select name=\"rollid\">";
							while($row=mysqli_fetch_array($result))
							{ 
								echo "<option value='".$row['CollegeId']."'>".$row['CollegeId']."</option>";
	   
							}
							echo "</select>";
						?>
						<input type="Submit" value="View" >
					</form>
			    </td>
			</tr>
		</table>
				<hr>
				<a href="addbook.php"><b>Click here to issue book</b></a><hr>
	<a href="ret.php"><b>Click here to return book </b></a><hr>
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