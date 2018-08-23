<html>
<body>
<link rel="stylesheet" href="style6.css">
<?php
		session_start();
			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");
		$sql = "SELECT r.roomno,rc.categoryid,categorytype,specification FROM roomdetail r,roomcategory rc WHERE rc.categoryid=r.categoryid AND r.roomno not in (SELECT roomno FROM confirmation) ORDER BY r.roomno";
		$result =mysqli_query($con,$sql);

		echo "<table>";
		echo "<tr><th>ROOMNO</th><th>CATEGORYID</th><th>CATEGORYTYPE</th><th>SPECIFICATION</th></tr>";

		while($row =mysqli_fetch_array($result))
		{
			echo "<tr> <td>" . $row['roomno'] . "</td>";
			echo "<td>" . $row['categoryid'] . "</td>";
			echo "<td>" . $row['categorytype'] . "</td>";
			echo "<td>" . $row['specification'] . "</td>";
			"</tr>";
		};
		echo "</table>";

		mysqli_close($con);
?>
<a href="category.php">Click here for Category Details</a>
<div class="loginbox4">
<form action="confirmation.php" method="post">

		<p>Enter the detail and requiements you prefer :</p>
		<p>Enter CategoryID :</p>
		<input type="text" name="cid">
		
		<p>Enter Usercode :</p>
		<input type="text" name="usercode">
		
		<p>Enter Room Number :</p>
		<input type="text" name="roomno">
		
		<p>Enter Number of person:</p>
		<input type="text" name="nop">
		
		<p>Enter Checkin Date:</p>
		<input type="date" name="cin">
		
		<p>Enter Checkout Date:</p>
		<input type="date" name="cout">
		
	
			<input type="submit" name="" value="BOOK">
	</form>
		<a href="cancel.php"><input type="submit" value="Cancel"></a>
</div>	
		
</body>
</html>