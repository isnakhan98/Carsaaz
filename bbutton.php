<html>
<head>
<title width='500' align='center'> SELECT YOUR ROUTE  </title>
</head>
 <h1> SELECT YOUR ROUTE <h1>


<button  hspace="10" style = "height : 100px ; width :200px" > ROUTE 1:  Nazimabad - Northnazimabad - FBarea - Gulshan </button> 

<button  style = "height : 100px ; width :200px" > ROUTE 2:  Nazimabad - Northnazimabad - FBarea - Gulshan </button> 

<button  style = "height : 100px ; width :200px" > ROUTE 3:  Nazimabad - Northnazimabad - FBarea - Gulshan </button> 

<button  style = "height : 100px ; width :200px" > ROUTE 4:  Nazimabad - Northnazimabad - FBarea - Gulshan </button> 

<button  style = "height : 100px ; width :200px" > ROUTE 5:  Nazimabad - Northnazimabad - FBarea - Gulshan </button> 

<body>.
	<form method='post' action='bbutton.php'>
		<table width='500' border='3' align='center'>
			<tr>
				<br>

				<th bgcolor='yellow'>SELECT YOUR ROUTE</th>
				
				</br>
			</tr>

		<tr>
			<td>SELECT</td>
			<td>
			<select name='bus_id'>
			<option value='null'>SELECT ROUTE</option>
			<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
			</select>
			</td>
		</tr>
</table>
</form>
</body>
</html>

<?php
$dbconnect=mysqli_connect("localhost","root","","m");
if(mysqli_connect_errno($dbconnect)){
echo"failed to connect";}
else
{echo'succesfull';}
?>