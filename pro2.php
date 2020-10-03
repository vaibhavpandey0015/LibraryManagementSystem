
<html>
<?php
   include('session1.php');
?>
  
<head>
<title>Admin Profile LBMS</title>

<?php


$uid=$_SESSION['login_admin'];
$hostname = "localhost";
$username = "root";
$password = "";
$database = "register";


$con=mysqli_connect($hostname,$username,$password,$database);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "SELECT * FROM admin WHERE Username='$uid'";

$result = mysqli_query($con,$sql);
 
  

?>


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
			<td >
				<center><img src="img/vai.gif"></center><hr>
				<table border="2" align="center">
<caption><h2> Profile</h2> </caption>	
	
<tbody>
<?php
		$no 	= 1;
		
		while ($row = mysqli_fetch_array($result))
		{
			
			echo '<tr>
					<th>First name</th>
					<td>'.$row['Firstname'].'</td>
				</tr>';
			echo '<tr>
					<th>Last name</th>
					<td>'.$row['Lastname'].'</td>
				</tr>';
			echo '<tr>
					<th>Email</th>
					<td>'.$row['Email'].'</td>
				</tr>';
			echo '<tr>
					<th>Mobile No.</th>
					<td>'.$row['Mobile no.'].'</td>
				</tr>';
			echo '<tr>
					<th>Gender</th>
					<td>'.$row['Gender'].'</td>
				</tr>';
			echo '<tr>
					<th>City</th>
					<td>'.$row['City'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
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




</html>

