<html>
	<head>
		<title>CUSTOMER INFORMATION</title>
    </head>
	
	<br>
	<br>	</table>
<table  width= '300' height='50' border='3' align ='center'>
<tr ><th bgcolor='tomato' >SIGN UP</th>
</tr>
</table>
	<br>
<body signin.png>
		<form method ='post' action='work.php'>
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
				<input type='submit' name='submit' value='Submit'></td>
		</tr>
		
</table>
</form>
<br>
<form>
<div align="center">
<input type="button" style = "height:60px;width:200px;display:block;margin-top:2%;margin-bottom:2%"; value="CLICK HERE" onclick="window.location.href='http://localhost/customer/choice.php'" />
</form></div>
</body>
</html>

<?php
$dbconnect=mysqli_connect("127.0.0.1","root","","transport");
if(mysqli_connect_errno($dbconnect))
{
"failed to connect";}
else
{'succesfull';}

if(isset($_POST['submit']))
{
 $cust_first=$_POST['first_name'];
 $cust_last=$_POST['last_name'];
 $cust_email=$_POST['email'];
 $cust_password=$_POST['password'];
 $cust_phone=$_POST['phone'];
$que="insert into customer(first_name,last_name,email,password,phone)values('$cust_first','$cust_last','$cust_email','$cust_password','$cust_phone')";



if(mysqli_query($dbconnect,$que))
{echo"your data has been inserted";}

else
{echo"error:".mysqli_error($dbconnect);}
}?>