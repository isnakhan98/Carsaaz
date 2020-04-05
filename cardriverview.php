<html>
<head>
<title width='500' align='center'>LOCATION/DESTINATION</title>
</head>
 

<body>
<form method ='post' action='cardriverview.php'>
			<table width='500' style="color:black" border='3' align='center'>
<tr>
	<th bgcolor='gold' colspan='5'>CONFIRM PICKUP</th>
</tr>
		

		

		<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>class:</h3></td>
				<td><input type='text' name='car_type'>
			    <?php echo @$_GET['address']; ?>
				</td>
		</tr>
<tr>
			<td><font color="tomato">location:</font></td>
			<td>
			<select name='pay_location'>
			<option value='null'>SELECT LOCATION</option>
			<option value='northnazimabad'>northnazimabad</option>
			<option value='NAZIMABAD'>NAZIMABAD</option>
			<option value='GULSHAN'>GULSHAN</option>
			<option value='DHA'>DHA</option>
			<option value='FBAREA'>fbarea</option>
			<option value='CLIFTON'>CLIFTON</option>
		</select>
			<font color='red'></font>
			</td>
				
		</tr>
		<tr>
			<td><font color="tomato">DESTINATION:</font></td>
			<td>
			<select name='pay_destination'>
			<option value='null'>SELECT DESTINATION</option>
			<option value='NORTH NAZIMABAD'>northnazimabad</option>
			<option value='NAZIMABAD'>NAZIMABAD</option>
			<option value='GULSHAN'>GULSHAN</option>
			<option value='DHA'>DHA</option>
			<option value='FEDERAL.B.AREA'>FBAREA</option>
			<option value='CLIFTON'>CLIFTON</option>
		
		</select>
			<font color='red'></font>
			</td>
				
		</tr>
		
		
<tr>
				<td align='center' colspan='6'>
				<input type='submit' name='UPDATE' value='Submit'></td>
		</tr>

<br>
<br>

<tr style="background-color:lightgrey">
				<td style="background-color:orange"><h3>ENTER CAR ID FOR CONFIRMATION</h3></td>
				<td><input type='varchar' name='car_no'>
			    
				</td>
		</tr>		
		<tr>
				<td align='center' colspan='6'>
				<input type='submit' name='confirm' value='submit'></td>
		</tr>

		</table>
		</form>
		
		
		
</body>
</html>
<?php

 

$dbconnect=mysqli_connect("127.0.0.1","root","","transport");
if(mysqli_connect_errno($dbconnect))
{
"failed to connect";}
else
{'succesfull';}

if(isset($_POST['UPDATE']))
{

 $pay_location=$_POST['pay_location'];
 $pay_destination=$_POST['pay_destination'];
 $car_type=$_POST['car_type'];

 
 
$query="insert into payment
(car_type,pay_location,pay_destination)values('$car_type','$pay_location','$pay_destination')";
mysqli_query($dbconnect,$query);
$querycar="SELECT * 
FROM car
WHERE ca_location =
'$pay_location'
AND class_id='$car_type' ";

$result=mysqli_query($dbconnect,$querycar);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{while($row=mysqli_fetch_assoc($result))
{echo $row ['car_id'].$row ['class_id'].$row ['model'].$row ['number_plate']."<br>";}}

}

?>
<?php 

$dbconnect=mysqli_connect("127.0.0.1","root","","dbmsk");
if(mysqli_connect_errno($dbconnect))
{
"failed to connect";}
else
{'succesfull';}
if(isset($_POST['confirm']))
{

 $car_no=$_POST['car_no'];
 
 $queryd="SELECT * 
FROM driver
WHERE (car_id='$car_no')";
 $resultd=mysqli_query($dbconnect,$queryd);
 
$resultcheckd=mysqli_num_rows($resultd);
if($resultcheckd>0)
{while($row=mysqli_fetch_assoc($resultd))
{echo $row ['firstname'].$row ['lastname'].$row ['phone_number']."<br>";}}
 
}
?>
