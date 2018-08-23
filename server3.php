<?php
		session_start();


	$usercode = "";
	$uname = "";
	 $email = "";
	 $phone = "";
	$errors = array(); 
	$_SESSION['success'] = "";




			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");		
		
		if(isset($_POST['login']))
		{




			$usercode = mysqli_real_escape_string($con, $_POST['usercode']);
			$uname = mysqli_real_escape_string($con, $_POST['uname']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$phone = mysqli_real_escape_string($con, $_POST['phone']);

			if (empty($usercode))
			{
				//array_push($errors, "Customer name is required");
										echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
			}
			if (empty($uname)) 
			{
				//array_push($errors, "Password is required");
										echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
			}

			if (count($errors) == 0) 
			{
				//$password = md5($password);
				$query="SELECT * FROM login WHERE usercode='$usercode' AND username='$uname' AND email='$email' AND phone='$phone'";
				$results = mysqli_query($con, $query);

				if (mysqli_num_rows($results) >= 1) 
				{
					$_SESSION['usercode'] = $usercode;
					$_SESSION['uname'] = $uname;

					$_SESSION['success'] = "You are now logged in";
					header('location:home.php');
				}
				else 
				{
						// array_push($errors,"Wrong username/password combination");
						echo '<script type="text/javascript">alert("Invalid Usercode!!!")</script>';
						
				}
			}
		}
		
		
?>