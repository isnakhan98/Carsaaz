
<html>
<head>
<title width='500' align='center'>LOCATION/DESTINATION</title>
</head>
 

<body style= "background:url(destination1.jpg) ; background-repeat:no-repeat; background-size:100% 100%">
<form method ='post' action='place.php'>
<br><br><br>
			<table width='500' height='50'style="color:black" border='3' align='center'>
	
	
<tr>
	<th bgcolor='gold' colspan='5'><h2>ENTER YOUR LOCATION & DESTINATION</h2></th>
</tr>
		
</table>
<br>
<br>
<br>
		<table width='500' height='200'style="color:black" border='3' align='center'>

		<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>ADDRESS:</h3></td>
				<td><input type='text' name='address'>
			    <?php echo @$_GET['address']; ?>
				</td>
		</tr>
<tr>
			<td style="background-color:orange"><font color="black">LOCATION:</font></td>
			<td style="background-color:lightgrey">
			<select name='location'>
			<option value='null'>SELECT LOCATION</option>
			<option value='NORTH NAZIMABAD'>NORTH NAZIMABAD</option>
			<option value='NAZIMABAD'>NAZIMABAD</option>
			<option value='GULSHAN'>GULSHAN</option>
			<option value='DHA'>DHA</option>
			<option value='FEDERAL.B.AREA'>FEDERAL.B.AREA</option>
			<option value='CLIFTON'>CLIFTON</option>
		</select>
			<font color='red'><?php echo @$_GET['location'];?></font>
			</td>
				
		</tr>
		<tr>
			<td style="background-color:orange"><font color="black">DESTINATION:</font></td>
			<td style="background-color:lightgrey">
			<select name='destination'>
			<option value='null'>SELECT DESTINATION</option>
			<option value='NORTH NAZIMABAD'>NORTHNAZIMABAD</option>
			<option value='NAZIMABAD'>NAZIMABAD</option>
			<option value='GULSHAN'>GULSHAN</option>
			<option value='DHA'>DHA</option>
			<option value='FEDERAL.B.AREA'>FEDERAL.B.AREA</option>
			<option value='CLIFTON'>CLIFTON</option>
		
		</select>
			<font color='red'><?php echo @$_GET['destination'];?></font>
			</td>
				
		</tr>
		
		
<tr>
				<td style="background-color:lightgrey" align='center' colspan='6'>
				<input type='submit' name='UPDATE' value='Submit'></td>
		</tr>
		<tr>
			<td align='center'>
			<select name='cancel'>
			<option value='null'>CANCEL </option>
			<option value='yes'>yes</option>
			<option value='no'>no</option>
			
			
			</select>
			<font color='red'><?php echo @$_GET['cancel'];?></font>
			</td>
		</tr>
		</table>
		</form>
		
		<a href="cardriverview.php">PLEASE CLICK TO CONFIRM BOOKING</a>
		
</body>
</html>
<?php
$dbconnect=mysqli_connect("127.0.0.1","root","","transport");
if(mysqli_connect_errno($dbconnect))
{
"failed to connect";}
else
{'succesfull';}
$sql = "SELECT * FROM customer";
$res=mysqli_query($dbconnect,$sql);

while ($row=mysqli_fetch_assoc($res))
{
    $i=$row['Customer_ID'];
}

if(isset($_POST['UPDATE']))
{
 $cust_location=$_POST['location'];
 $cust_destination=$_POST['destination'];
 $cust_address=$_POST['address'];
  $cust_cancel=$_POST['cancel'];

$que=" INSERT
 into customer(location,destination,address,rent) values('$cust_location','$cust_destination','cust_address',20) SET rent=20 WHERE Customer_ID=31";


 if(mysqli_query($dbconnect,$que))
{echo"your data has been inserted";}

else
{echo"error:".mysqli_error($dbconnect);}
}?>

