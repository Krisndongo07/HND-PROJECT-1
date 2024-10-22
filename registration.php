<?php
$sever = "localhost";
$username = "root";
$Password = "";
$db = "sotar_database";

$conn = mysqli_connect($sever,$username,$Password,$db);
if(!$conn){
   die("connection failed". mysqli_connect_error());
}
else{
   echo "connected";
}


$rName = $_POST['rName'];
$rEmail = $_POST['rEmail'];
$rPassword = $_POST['rPassword'];

$sql = "INSERT INTO requesterlogin_tb (r_name) VALUES ('$rName')";
if (mysqli_query($conn, $sql)){
   echo "good";
}
else{
   echo "error" .$sql ."<br>" .mysql_error($conn);
}
mysqli_close($conn);
?>