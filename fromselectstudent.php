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
			<div>
			<a href="home2.php">Home</a>&nbsp &nbsp &nbsp 
   			<a href="issue1.php">Issue and Return Books</a>&nbsp &nbsp &nbsp 
			<a href="students.php">Register Students</a>&nbsp &nbsp &nbsp 
			<a href="available2.php">Available Books</a>&nbsp &nbsp &nbsp
   			<a href="notification2.php">Notification and Updates</a>&nbsp &nbsp &nbsp 
   			<a href="home.php">Logout</a>
			<h4 align="right">Welcome <?php echo $_SESSION['login_admin']; ?></h4>
			</div><hr>
			</td>
		</tr>
		
		<tr height="60%">
			<td align="center">
			<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'register'; // Database Name

$roll=$_POST['rollid'];

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT * FROM student where Rollno='$roll'";
		
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
				<p style="margin: 0 100px">"Group no.1" "INFORMATION TECHNOLOGY BRANCH" "4th semester" .</p><br>
				</div>
			</td>
		</tr>
</table>

</body>
</html>