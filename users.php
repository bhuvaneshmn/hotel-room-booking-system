<html>
<body>
	<link rel="stylesheet" href="style.css">
<?php
		session_start();
			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");
		$sql = "SELECT * FROM registration";
		$result =mysqli_query($con,$sql);

		echo "<table border='1'>
		<tr>
		<th>usercode</th>
		<th>fname</th>
		<th>lname</th>
		<th>DOB</th>
		<th>doorno</th>
		<th>city</th>
		<th>pincode</th>
		<th>state</th>
		<th>email</th>
		<th>phone</th>
		<th>Registrationdate</th>
		<th>IDprooftype</th>
		<th>IDproofno</th>
		</tr>";

		while($row =mysqli_fetch_array($result))
		{
			echo "<tr> <td>" . $row['usercode'] . "</td>";
			echo "<td>" . $row['fname'] . "</td>";
			echo "<td>" . $row['lname'] . "</td>";
			echo "<td>" . $row['DOB'] . "</td>";
			echo "<td>" . $row['doorno'] . "</td>";
			echo "<td>" . $row['city'] . "</td>";
			echo "<td>" . $row['pincode'] . "</td>";
			echo "<td>" . $row['state'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['phone'] . "</td>";
			echo "<td>" . $row['registrationdate'] . "</td>";
			echo "<td>" . $row['IDprooftype'] . "</td>";
			echo "<td>" . $row['IDproofno'] . "</td>";
			"</tr>";
		};
		echo "</table>";

		mysqli_close($con);
?>
<form class="myform" action="home.php" method="post">
		<h1>
			<input name="back" type="submit" id="logout_btn" class="btn" value="Back"/><br>
		</h1>	
		</form>

</body>
</html>