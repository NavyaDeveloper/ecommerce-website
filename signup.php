<?php
session_start();

$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'jwellery project');
$uname = $_POST['uname'];
$email = $_POST['email'];
$ps = $_POST['ps'];
$address = $_POST['address'];

$s ="SELECT * from signup where email='$email'";
$result= mysqli_query($conn, $s);
$num=mysqli_num_rows($result);

if($num==1)
{
    echo '<script type="text/JavaScript"> 
   if(alert("Email already registered")){}
else    window.location=document.referrer; 
    </script>'
;
}
else{
    $reg=" INSERT Into signup (uname,email,ps,address)values('$uname','$email','$ps','$address')";
    mysqli_query($conn,$reg);
    
    $_SESSION['email']=$email;
    $_SESSION['uname']=$uname;
    $_SESSION['address']=$address;
    echo '<script type="text/JavaScript"> 
   if(alert("Registered successfully")){}
else    window.location=document.referrer; 
    </script>'
;
}
 ?>