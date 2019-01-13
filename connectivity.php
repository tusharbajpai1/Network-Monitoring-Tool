<?php
$DB_HOST= "localhost";
$DB_NAME ="login";
$DB_USER="root";
$DB_PASSWORD="cciitk";
$con=mysqli_connect("localhost","root","cciitk","login");  // creating the connection with mysql
if (mysqli_connect_errno()) // run if the connection won't get created
 {
    echo "failed to connect to MYSQL:" .mysqli_connect_errno();  
  }

$db=mysqli_select_db($con,"login") or die ("Failed to connect to MySQL: " . mysqli_error($con));  // connecting with the database
session_start(); 

if(!empty($_POST['username'])) //checking the username, is it empty or have some text
 { 
 
  if(!empty($_POST['password']))   //checking the password, is it empty or have some text

   {
     $query = mysqli_query($con,"SELECT * FROM tushar where username ='$_POST[username]' && password ='$_POST[password]'"); //SQl query for 																      authorzing entry
   
     if(mysqli_num_rows($query) > 0) // to check whether the query got some result or not
         {
            echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
            header ('refresh: 2, URL="welcome.php"');  //redirect to the welcome.php page after 2 seconds
         }
      else
         {
      	    echo "SORRY, WRONG CREDENTIALS PLEASE TRY AGAIN!!!!!!!!!";
            header('refresh:1,URL="login.html"');
         }


   }
   else 
         {
	    echo "SORRY, PASSWORD COLUMN CAN'T BE BLANK";
	    header('refresh:1,URL="login.html"');
         }
}

else {
	echo "SORRY, USERNAME COLUMN CAN'T BE BLANK";
	header('refresh:1,URL="login.html"');
     }
?>
