
<html>
<head>

    <meta charset="utf-8">   <!--  support Arabic Language  -->
    <meta name="description" content="poplar website for selling cars">  <!--  when searching on google in website  -->

    <title>Carvana</title>
    
    <link rel="stylesheet" href="main.css">
  
</head>

<body>

<header>
    <nav>
      
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="add_car.html">Add new CAR</a></li>          
            <li><a href="contact.html">contact us</a></li>
            <li><a href="about.html">about us</a></li>
        </ul>
    </nav>


            <div class="banner">

                 <div class="banner-center">

                     <img src="img\logo.png" alt="logo.png">
                     <h1>carvana</h1>
                     <h3>for selling cars</h3>

                 </div>
            </div>
</header>


<!--Projects-->

<section class="projects-section">

<div class="title">
    <h2>CARS</h2>
    <div class="title-underline"></div>
</div>


<div class="projects-center">

 <!-- Showing Cars in Database -->

<article class="project">

<?php
            $connection = mysqli_connect('localhost','root','','carvana') or die("Not Connected");

                $query = "SELECT * FROM add_new_car";

                $query_run = mysqli_query($connection,$query);
                // return an object
                	
                	
					while($rows = mysqli_fetch_array($query_run))
					 {

    echo '<div class="box">';
             	echo  '<img src="php/carsphotos/'. $rows['imgName'] .'  " >   ';
    echo '<table>';                  
                 echo  " <tr> <td> CAR name  </td> <td>". $rows['carName']. "</td> </tr> " ;
                 echo  " <tr> <td> Owner  </td> <td>". $rows['ownerName']. "</td> </tr> " ;
                 echo  " <tr> <td>  VIN  </td> <td> ".$rows['VIN'] ."  </td> </tr> " ; 
                 echo  " <tr> <td>  model  </td> <td> ".$rows['Model'] ."  </td> </tr> " ; 
                 echo  " <tr> <td>  manufacture   </td> <td> ".$rows['manufacture'] ."  </td> </tr> " ; 
                echo  " <tr> <td>  transaction  </td> <td> ".$rows['transmition'] ."  </td> </tr> " ; 
                echo  " <tr> <td>  gas Type  </td> <td> ".$rows['gasType'] ."  </td> </tr> " ; 
                echo  " <tr> <td> expiration  </td> <td> ".$rows['expiration'] ."  </td> </tr> " ; 
                echo  " <tr> <td> phone Number  </td> <td> ".$rows['phoneNumber'] ."  </td> </tr> " ; 
				echo  " <tr> <td> address  </td> <td> ".$rows['address'] ."  </td> </tr> " ; 

        echo "</table></div>";
                
					}        

					?>









</article>
    </div>
</section> 



    
<!-- ################################################################################ -->

<footer>
        <a href="www.facebook.com"> <img src="img\facebook.png" alt="facebook.png"></a>
        <a href="www.instagram.com"> <img src="img/instagram.png" alt="instagram.png"></a>
        <a href="www.twitter.com"> <img src="img\twitter.png" alt="twitter.png"></a>    
    <p>Copyright&copy;younisHesham.All rights</p>
</footer>

</body>
</html> 