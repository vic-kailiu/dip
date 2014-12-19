<?php 
session_start();
define('DB_HOST', 'mysql1.000webhost.com'); 
define('DB_NAME', 'a2047226_dip'); 
define('DB_USER','a2047226_myuser');
define('DB_PASSWORD','5xxxxx'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

SignIn(); 
function SignIn() 
{ 
     echo "'$_POST[pass]' '$_POST[user]'";
	$_SESSION["userName"] = $_POST[user];
	

    if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
  {

      $query = mysql_query("SELECT * FROM logintable where username = '$_POST[user]' AND password = '$_POST[pass]';");
      $row = mysql_fetch_array($query);

     if(!empty($row['username']) AND !empty($row['password'])) 
    { 
      echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...'$_POST[pass]' '$_POST[user]'"; 
      $_SESSION['username'] = $row['password'];
	  $_SESSION['userName'] = $row['username'];
      if ($row['status']=='s') {
       header('Location:dashboard.php');
       echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
    }
       else
       {
         header('Location:http://dip.net63.net/dip/theme/Teacherdashboard.html');
       }
   } 
   else
   { 
      echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...'$_POST[pass]' '$_POST[user]'"; 
   }
   }
}
if(isset($_POST['submit'])) 
 { SignIn(); 
 } 
?>


					