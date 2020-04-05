<html>
<html>
<head>
<title> BOOK YOUR TICKET HERE  </title></head>
<BR>
<table width='40' style="color:black" border='2' align='LEFT'>
  </table>
<table width='600' HEIGHT='200'style="color:black" border='2' align='LEFT'>
<tr>
	<th bgcolor='gold' colspan='10'><h1>CHOOSE YOUR TICKET</h1></th>
</tr>
  <tr>
    <th bgcolor='lightgreen'>CATEGORY A: 1 PASSENGER @Rs-10/- </th>
    <th bgcolor='lightgreen' colspan="2">CATEGORY B: 2 PASENGERS @Rs-20/-</th>
	 <th bgcolor='lightgreen'colspan="2">CATEGORY C: 4 PASENGERS @Rs-40/-</th>
	  <th bgcolor='lightgreen' colspan="2">CATEGORY D: 8 PASENGERS @Rs-80/-</th>
  </tr>

  </table>
   <table width='40' HEIGHT='200' style="color:black" border='2' align='RIGHT'>
   </TABLE>
  <table width='700' HEIGHT='200'style="color:black" border='2' align='RIGHT'>
<tr>
	<th bgcolor='gold' colspan='10'><h1>CHOOSE YOUR TICKET</h1></th>
</tr>
  <tr>
    <th bgcolor='lightsalmon'> ROUTE 1:  Nazimabad - Northnazimabad - FBarea - Gulshan </th>
    <th bgcolor='lightsalmon'colspan="2"> ROUTE 2:  Nazimabad - Northnazimabad - FBarea - Gulshan</th>
	 <th bgcolor='lightsalmon'colspan="2"> ROUTE 3:  Nazimabad - Northnazimabad - FBarea - Gulshan </th>
	  <th bgcolor='lightsalmon'colspan="2"> ROUTE 4:  Nazimabad - Northnazimabad - FBarea - Gulshan </th>
	  <th bgcolor='lightsalmon'colspan="2">  ROUTE 5:  Nazimabad - Northnazimabad - FBarea - Gulshan </th>
  </tr>

  </table>
  
<body style= "background:url(bus.jpg) ; background-repeat:no-repeat; background-size:100% 100%">
<br>
<br><br><br><br><br><br><br>
	<form method='post' action='my_ticket.php'>
		<table width='500' height='100'border='5'style="color:black" align='center'>
			<tr>
				<br>
<br><br><br>
<br>
				<th colspan='10' bgcolor='yellow'><h1>SELECT YOUR ROUTE</h1></th>
				
				</br>
			</tr>

		<tr>
			<td>SELECT</td>
			<td>
			<select name='category_id'>
			<option value='null'><h3>SELECT CATEGORY</option>
			<option value='A'>A</option>
			<option value='B'>B</option>
			<option value='C'>C</option>
			<option value='D'>D</option>
			
			</select>
			</td>
		</tr>
</table>

<table width='400' height='50'border='5'style="color:black" align='center'>
			<tr>
			
				<th bgcolor='yellow'><h3>do you want to cancel?</h3></th>
	
			</tr>

		<tr>
			<td align='center'>
			<select name='cancel_penalty'>
			<option value='null'>SELECT </option>
			<option value='yes'>yes</option>
			<option value='no'>no</option>
			
			
			</select>
			</td>
		</tr>
	<tr>
				<td align='center' >
				<input type='submit' name='submit' value='Submit' style="height:30;width:150">
				</td>
		</tr>
		<marquee><h1>YOU MAY BE GIVEN A CANCEL PENALTY ON CANCELLATION OF TICKETS</h1></marquee>




</form>
</body>
</html>

<?php
$dbconnect=mysqli_connect("localhost","root","","m");
if(mysqli_connect_errno($dbconnect)){
echo"failed to connect";}
else
{echo'succesfull';}
if(isset($_POST ['submit']))
{
 $category_id=$_POST['category_id'];
  $cancel_penalty=$_POST['cancel_penalty'];
$bus_no=$_POST['bus_no'];


$que ="insert into ticket
(category_id,cancel_penalty,bus_no)values('$category_id','$cancel_penalty','$bus_no')";
if(mysqli_query($dbconnect,$que)){
	echo "data inserted"
	

;
}

}
?>
