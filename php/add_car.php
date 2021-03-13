<?php

$carName = $_POST['carName'];
$ownerName = $_POST['ownerName'];
$vin = $_POST['vin'];
$model = $_POST['model'];
$manufacture = $_POST['manufacture'];
$transmition = $_POST['transmition'];
$gasType = $_POST['gasType'];
$date = $_POST['date'];
$phoneNumber = $_POST['phoneNumber'];
$address= $_POST['address'];
$image = $_FILES['image']['name'];
	


	if( !empty($carName) && !empty($ownerName) && !empty($vin) && !empty($model) && !empty($manufacture) && !empty($transmition) && !empty($gasType) && !empty($date) && !empty($phoneNumber) && !empty($address) && !empty($image) )
	{

		$connection = mysqli_connect('localhost','root','','carvana');

			 if(mysqli_connect_error())
			  {
			    die('connect Error:( '.mysqli_connect_errno() . ')' . mysqli_connect_error() );
			  } 
			 else {
			 	
        			// Make sure to there is One Car in DataBasee

        		$query = "SELECT vin from add_new_car WHERE vin = ? limit 1";

                    
                    $var = $connection->prepare($query);
                    $var->bind_param('s',$vin);
                    $var->execute(); 
                    
                    $var->bind_result($vin); 
                    $var->store_result(); 
                    $rnum = $var->num_rows;

                    if($rnum == 0)
                    {

                    	$insert = "INSERT INTO add_new_car
                    	 (carName , ownerName , VIN , Model , manufacture , transmition , gasType , expiration , phoneNumber , address , imgName )
                    	 VALUES ( ?,?,?,?,?,?,?,?,?,?,? )";

                    	 // Prepare Send Query to DataBase
                    	 $Var = $connection->prepare($insert);

                    	 // Send Values To prepare through bind_param
                    	 $Var->bind_param('sssissssiss', $carName , $ownerName , $vin , $model , $manufacture , $transmition , $gasType , $date ,
                    	  $phoneNumber , $address , $image );

                    	 $Var->execute();

                                echo "Information Inserted.";

                         // Move Photo to Pictures Folder

                            $imgPath = 'CarsPhotos/'. $_FILES['image']['name'];

                         move_uploaded_file( $_FILES['image']['tmp_name'],$imgPath);
                         
                    }
                    else{
                    	echo "<br><br> CAR is Already Exist ! <br>";
                    }

                    $var->close();
                    $connection->close();
			 }
	}
	else{	echo "Fill all Forms";	}

?>