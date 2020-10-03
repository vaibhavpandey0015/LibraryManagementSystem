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


$sql = "SELECT * FROM issueandreturn";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>



	
	<table class="data-table"align="center" border="4" bordercolor="maroon" >
		<caption class="title">Displaying Available Books</caption>
		<thead>
			<tr>
				<th>CollegeId</th>
				<th>Name of the Student</th>
				<th>Name of the Book</th>
				<th>Bookno.</th>
				<th>Date of Issue</th>
				<th>Date of Submission</th>
				<th>fine</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
                    
					<td>'.$row['CollegeId'].'</td>
					<td>'.$row['Nameofstudent'].'</td>
					<td>'.$row['Nameofbook'].'</td>
					<td>'.$row['bookno'].'</td>
					<td>'.$row['date of issue'].'</td>
					<td>'.$row['date of submission'].'</td>
					<td>'.$row['fine'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
	<a href="issue1.php"><b>Click here to return </b></a><hr>
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