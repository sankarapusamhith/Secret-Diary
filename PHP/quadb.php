<?php
$host="localhost:3306";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass);
if(!$conn)
{
 die("couldnot connect".mysql_connect_error());
} 
echo"connected";
$sql="CREATE Database quadb1";
if(mysqli_query($conn,$sql))
{
echo"database created";
}
else{
echo"failed".mysqli_error($conn);
}
mysqli_close($conn);

$dbname='quadb1';
$conn=mysqli_connect($host,$user,$pass,$dbname);

if(!$conn)
{
 die("couldnot connect".mysql_connect_error());
} 
echo"connected";

$sql = "create table user(  
email VARCHAR(100),password VARCHAR(20),diary VARCHAR(10000),primary key (email))";  
if(mysqli_query($conn, $sql)){  
 echo "Table created successfully";  
}
else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
mysqli_close($conn);  


$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
  
$sql = "INSERT INTO user(email,password)
        VALUES ('".$_POST["email"]."','".$_POST["password"]."')"; 


if(mysqli_query($conn, $sql)){  
 header("Location: textarea.html"); 
}else{  
echo "<script>
             alert('Could not insert record:email already exists'); 
             window.history.go(-1);
     </script>". mysqli_error($conn); 
}  
mysqli_close($conn);  
?>