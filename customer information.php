<html>
	<head>
		<title>CUSTOMER INFORMATION</title>
    </head>
	
<body background="i.jpg">
		<form method ='post' action='customer information.php'>
			<table width='500' border='3' align='center'>
<tr>
	<th bgcolor='yellow' colspan='5'>CUSTOMER INFORMATION</th>
</tr>
		<tr>
				<td>first_name</td>
				<td><input type='text' name='first_name'>
				<font color='red'><?php echo @$_GET['first']; ?></font>
				</td>
		</tr>

		<tr>
				<td>last_name</td>
				<td><input type='text' name='last_name'>
			    <font color='red'><?php echo @$_GET['last']; ?></font>
				</td>
		</tr>
		
		<tr>
				<td>email</td>
				<td><input type='text' name='email'>
				<font color='red'><?php echo @$_GET['email']; ?></font>
				</td>
		</tr>
		
		<tr>
				<td>password</td>
				<td><input type='text' name='password'>
				<font color='red'><?php echo @$_GET['password']; ?></font>
				</td>
		</tr>
		
		<tr>
				<td>phone</td>
				<td><input type='text' name='phone'>
				<font color='red'><?php echo @$_GET['phone']; ?></font>
				</td>
		</tr>
		
		<tr>
				<td align='center' colspan='6'>
				<input type='submit' name='submit' value='Submit'>
				</td>
		</tr>
		

</form>
</body>
</html>

<?php
$dbconnect=mysqli_connect("127.0.0.1","root","","transport");
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
$query="insert into customer(first_name,last_name,email,password,phone)values('$cust_first','cust_last','cust_email','cust_password','cust_phone')";


if($cust_first=='')
{
	echo"<script>window.open('customer information.php?first=FirstName is Required','_self')</script>";
	exit();
}

if($cust_last=='')
{
	echo"<script>window.open('customer information.php?last=LastName is Required','_self')</script>";
	exit();
}
if($cust_email=='')
{
	echo"<script>window.open('customer information.php?email=email is Required','_self')</script>";
	exit();
}
if($cust_password=='')
{
	echo"<script>window.open('customer information.php?password=enter password is Required','_self')</script>";
	exit();
}
if($cust_phone=='')
{
	echo"<script>window.open('customer information.php?phone=Required','_self')</script>";
	exit();
}

if(mysqli_query($dbconnect,$query))
{echo "your data has neen inserted";}
}else
{echo"error:".mysqli_error($dbconnect);}
?>