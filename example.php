<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>transperent Login form</title>
		<link rel="stylesheet" href="styleins.css">
	</head>
	<body>
		<div class="bg">
		<div class="loginbox">
			<img src="room-32327.PNG" class="image">
			<h2>Room Details</h2>
			<form method="post" action="roominsert.php">

				<p>RoomNO</p>
				<input type="text" name="roomno" placeholder="Enter roomno">
			
				<p>CategoryID</p><br><br>
				 <select name="sel">
				<option value="1111">1111</option>
				<option value="1112">1112</option>
				<option value="1113">1113</option>
				<option value="1114">1114</option>
				<option value="1115">1115</option>
				<option value="1116">1116</option>
				<option value="1117">1117</option>
				<option value="1118">1118</option>
				</select> <br><br>
				
				<p>Specification</p><br><br>
				<select name="sel1">
				<option value="AC,WiFi">AC,WiFi</option>
	<option value="AC,WiFi,Music">AC,WiFi,Music</option>
	<option value="AC">AC</option>
	<option value="Non AC">Non AC</option>
</select> <br><br><br>
				<input type="submit" value="Insert" />
<input type="reset" value="Reset" />
			</form>
		</div>
	</div>
	</body>
</html>

