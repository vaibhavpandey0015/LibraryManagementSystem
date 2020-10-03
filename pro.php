






<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "register";
$link = mysqli_connect($hostname, $username, $password,$database);
$query = "select * from register WHERE CollegeId LIKE _[$_SESSION['login_user']]";
$result = mysqli_query($link,$query);	
if()
?>



<html>
<?php
   include('session.php');
?>

<title>Profile LBMS</title>

 <body>
 <?php echo $_SESSION['login_user']; ?>
 
 <table border="2">  
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Address</th>
					<th>Email</th>
					<th>Mobile Number</th>
				</tr>
				<? 
				while ($array=mysql_fetch_row($result)):
				{
					print"<tr><td>";
		            echo $array[0]; 
					print "</td> <td>";
					echo $array[1]; 
					print "</td> <td>";
					echo $array[2]; 
					print "</td> </tr>";
					echo $array[3]; 
					print "</td> </tr>";
					echo $array[4]; 
					print "</td> </tr>";
					
				}			
				?>
</table>			
</body>
</html> 