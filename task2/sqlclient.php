<?php
$servername = $_POST["server_name"];
$username = $_POST["user"];
$password = $_POST["pass"];
$database = $_POST["database"];
$query = $_POST["query"];


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully \n";}
if($database){   
 mysqli_select_db($conn, "$database") or die(mysql_error());}

 if(mysqli_query ($conn,"$query")){
   echo " <br> $query";
   echo "<br>Query executed Successfully";
 } 
 else{
  echo "<br>Query execution failed";
 }
?>