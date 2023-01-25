<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'jwellery project');


$lemail = $_POST['lemail'];
$lps = $_POST['lps'];


$s ="SELECT * from signup where email='$lemail' && ps='$lps'";
$result= mysqli_query($conn, $s);
$num=mysqli_num_rows($result);

if($num==1)
{
   header('location:viewcartlogin.php');
}
else{
    echo '<script type="text/JavaScript"> 
    if(alert("Login Failed...")){}
 else    window.location=document.referrer; 
     </script>'
 ;
}
?>