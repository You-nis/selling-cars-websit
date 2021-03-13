<?php

 // transport data from html page  to php page
$email = $_POST['email'];
$subjectName =$_POST['subject_name'];
$comment = $_POST['comment'];


if( !empty($email) && !empty($comment))
{

	$Connection = mysqli_connect('localhost','root','','CARVANA');

		if(mysqli_connect_error())
			{
				die("Connection Error : ".mysqli_connect_error() . "<br> error No( " .mysqli_connect_errno() ." )" );
			}
		else {

			$INSERT = "INSERT INTO contact_us (Email,subjectName,comment) VALUES (?,?,?)";

			// PrePare
			$query = $Connection->PrePare($INSERT);

			// bind param
			$query->bind_param('sss',$email,$subjectName,$comment);
			// execute
			$query->execute();
		 echo "<center> <h1>Query is Send 😊</h1> </center>";
		}
		
         $query->close();
         $Connection->close();
}
else
{
	echo "Fill the Forms";
}
?>