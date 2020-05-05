<?php
$username= $_POST['username']; 
$password= $_POST['password'];
if(!empty($username)){
	
	if(!empty($password)){
		$host="localhost";
		$usernamedb="root";
		$passworddb="priya";
		$namedb="form";
		 //create connection
		 $conn=new mysqli_connect($host,$usernamedb,$passworddb,$namedb);
		 //check connection
		 if(mysqli_connect_error()){
			 die('Connect error(' . mysqli_connect_errno().')'.mysqli_connect_error());
		 }
		 else{
			 $sql= " INSERT INTO login( username, password) values('$username', '$password')";
			 if($conn->query($sql)){
				 echo "new record inserted successfully";
			 }
			 else{
				// echo "error: " . $sql . "<br>" .$conn->error; 
				echo "Error of sql query";
			 }
			 // $conn->close();
	}
	}
	else{
		echo "password should not be empty";
	}
}

else{
	echo "username should not be empty";
	die();
} 
?>