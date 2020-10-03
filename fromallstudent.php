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
			<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'register'; // Database Name



$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


$sql = "SELECT * FROM student";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
	
	<table class="data-table" align="center" border="4" bordercolor="maroon">
		<h2 align="center">Displaying Student Details</h2>
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Roll No</th>
				<th>Gender</th>
				<th>Qualification</th>
				<th>Mobile</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['Name'].'</td>
					<td>'.$row['Address'].'</td>
					<td>'.$row['Rollno'].'</td>
					<td>'.$row['Gender'].'</td>
					<td>'.$row['Qualification'].'</td>
					<td>'.$row['Mobile'].'</td>
					<td>'.$row['Email'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
	<a href="students.php"><b>Click here to return </b></a>

				<hr>
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