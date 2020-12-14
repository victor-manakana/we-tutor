<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$studnum = $_POST['studnum'];
	$subject = $_POST['subject'];
	$username = $_POST['username'];
	$userpass = $_POST['userpass'];
	


	//database connection
	$conn = new mysqli('localhost','root','','tutor');
	if ($conn->connect_error) {

		die('connection failed  : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into weTutor(fname, lname,studnum ,subject,username,userpass) values(?,?,?,?,?,?)");
		$stmt->bind_param("sssis",$fname, $lname, $studnum, $subject, $username, $userpass);
		$stmt->execute();
		echo "Your Covid screening has been sent to the Health care center";
		$stmt->close();
		$conn->close();
	}

?>