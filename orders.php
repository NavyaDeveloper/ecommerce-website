<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php
session_start();

$conn =mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'jwellery project');
$uname=$_SESSION['uname'];
$email=$_SESSION['email'];
$address=$_SESSION['address'];
$address2=$_POST['address2'];
$country=$_POST['country'];
$state=$_POST['state'];
$zip =$_POST['zip'];
$phno =$_POST['phno'];
$nameoncard =$_POST['nameoncard'];
$cardnumber =$_POST['cardnumber'];
$cvc =$_POST['cvc'];
$expirymonth =$_POST['expirymonth'];
$expiryyear =$_POST['expiryyear'];
$date = date('Y-m-d H:i:s');

$total=0;
		$sno=1;
		foreach($_SESSION['cart'] as $keys=>$values)
		{
      $qty=$values["qty"];
      $productname1=$values["name"];
      $productprice=$values["price"];
			$amt=$values["qty"]*$values["price"];
		$gst=$amt*18/100;
		$gt=$amt+$gst;
		$total+=$gt;

    $reg="INSERT INTO orders(uname,email,address,address2,country,state,zip,phno,nameoncard,cardnumber,cvc,expirymonth,expiryyear,date,productname1,productamt,qty,productprice,gst,gt,total) VALUES ('{$_SESSION['uname']}','{$_SESSION['email']}','{$_SESSION['address']}','$address2','$country','$state','$zip','$phno','$nameoncard','$cardnumber','$cvc','$expirymonth','$expiryyear','$date','$productname1','$amt','$qty','$productprice','$gst','$gt','$total')";
    mysqli_query($conn,$reg);
    }
            

    
    echo '<script type="text/JavaScript"> 
    swal({
        title: "Are you sure to make payment?",
        text: "Once clicked, Your payment will be made!",
        icon: "info",
        buttons: true,
  dangerMode: true,
    
      })
      .then((willDelete) => {
        if (willDelete) {
            swal("Your payment is successful!");
            sessionStorage.clear();
            window.location.href = "shopping_success.php";
    
        } else {
       
          swal("Your payment is failed!", {
            icon: "error",
          });
          window.location.href = "index.php";
        }
      });
    </script>'
;

 ?>

 </body>
    </html>