<html>
	<head>
		<title>CUSTOMER INFORMATION</title>
    </head>
	<br>
	<br>
	<br>
	<br>	</table>
<table  width= '300' height='50' border='3' align ='center'>
<tr ><th bgcolor='tomato' >SIGNING IN</th>
</tr>
</table>
	
<body style= "background:url(signin.png) ; background-repeat:no-repeat; background-size:100% 100%">
		<form method ='post' action='cust.php'>
			<table width='500' style="color:black" border='3' align='center'>
<tr>
	<th bgcolor='gold' colspan='5'>CUSTOMER INFORMATION</th>
</tr>
		<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>FIRSTNAME</h3></td>
				<td><input type='text' name='first_name'>
				<font color='red'><?php echo @$_GET['first']; ?></font>
				</td>
		</tr>

		<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>LASTNAME</h3></td>
				<td><input type='text' name='last_name'>
			    <font color='red'><?php echo @$_GET['last']; ?></font>
				</td>
		</tr>
		
		<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>EMAIL</h3></td>
				<td><input type='text' name='email'>
				<font color='red'><?php echo @$_GET['email']; ?></font>
				</td>
		</tr>
		
		<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>PASSWORD</h3></td>
				<td><input type='text' name='password'>
				<font color='red'><?php echo @$_GET['password']; ?></font>
				</td>
		</tr>
		
		<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>PHONE</h3></td>
				<td><input type='text' name='phone'>
				<font color='red'><?php echo @$_GET['phone']; ?></font>
				</td>
		</tr>
		
		<tr>
				<td align='center' colspan='6'>
				<input type='submit' name='submit' value='Submit' " style="height: 25px; width: 100px">
				</td>
		</tr>
	<tr>
	<td align='center' colspan='6'><button style = "height : 50px ; width :120px" type= 'signup' > <h3> <a href="cab.php" >  NEXT </button></h3>
</td></tr>	
</a>
		
</form>
</body>
</html>

<?php
$dbconnect=mysqli_connect("127.0.0.1","root","","m");
if(mysqli_connect_errno($dbconnect))
{
echo"failed to connect";}
else
{echo'succesfull';}

if(isset($_POST['submit']))
{
echo $cust_first=$_POST['first_name'];
echo $cust_last=$_POST['last_name'];
echo $cust_email=$_POST['email'];
echo $cust_password=$_POST['password'];
echo $cust_phone=$_POST['phone'];
$que="insert into customer(first_name,last_name,email,password,phone)values('$cust_first','$cust_last','$cust_email','$cust_password','$cust_phone')";



if(mysqli_query($dbconnect,$que))
{echo "your data has been inserted";}
else
{echo"error:".mysqli_error($dbconnect);}
}?>