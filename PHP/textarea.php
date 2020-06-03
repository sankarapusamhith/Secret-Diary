<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'quadb1';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
   $filename = "log.txt";
$fp = fopen($filename, "r");
$uemail = fread($fp, filesize($filename));
fclose($fp);

   $sql1="UPDATE user SET diary='".$_POST["comment"]."' WHERE email='$uemail'";


if(mysqli_query($conn, $sql1)){  
 header("Location: textarea.html"); 
}
	

else{  
echo ". mysqli_error($conn)"; 
}  


mysqli_close($conn);  
?>