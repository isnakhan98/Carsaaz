<html>
	<head>
		<title>class selection</title>
    </head>
	
	<body>
		<form method ='post' action='class.php'>
			<table width='500' style="color:black" border='3' align='center'>
<tr>
	<th bgcolor='gold' colspan='5'>CLASS SELECTION</th>
</tr>

	<tr>
			<td><font color="tomato">SELECT:</font></td>
			<td>
			<select name='Class'>
			<option value='null'>SELECT CLASS</option>
			<option value='BUSINESS'>BUSINESS</option>
			<option value='ECONOMY'>ECONOMY</option>
		
		
		<tr>
		<td align='center' colspan='6'>
		<input type='submit' name='submit' value='Submit'>
		</td>
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
?>