<?php
session_start();

$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'jwellery project');

$username=$_POST['username'];
$ps=$_POST['ps'];


if($username=="admin" && $ps=="admin@123")
{
   
   header('location:admindashboard.php');
}
else{

echo '<script type="text/JavaScript"> 
if(alert("Invalid Username and Password")){}
else    window.location=document.referrer; 
 </script>'
;
}
?>