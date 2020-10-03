<html>
<head>
<title>Display books</title>
</head>

<body style="border:3; border-style:solid">
<table height="100%" width="100%">
		<tr height="20%">
			<td><h1 align="center">LIBRARY MAANGEMENT SYSTEM </h1><hr></td>
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

$sql = "SELECT * FROM books where Branch='$roll'";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

	<table class="data-table" align="center" border="4" bordercolor="black" >
		<caption class="title">Displaying Books Available</caption>
		<thead>
			<tr>
				<th>Name of Book</th>
				<th>Serial No</th>
				<th>Branch</th>
				<th>Author and Writer</th>
				<th>No of Books available</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['Book Name'].'</td>
					<td>'.$row['Serial No'].'</td>
					<td>'.$row['Branch'].'</td>
					<td>'.$row['Author and Writer'].'</td>
					<td>'.$row['No. of Books Available'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
	<a href="available1.php"><b>Click here to return </b></a>
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