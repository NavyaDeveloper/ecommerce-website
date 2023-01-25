<?php include("header.php")?> 
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include("connection.php");
?> 

<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @media screen and (min-width: 676px) {
        .modal-dialog {
          max-width: 1000px; /* New width for default modal */
        }
    }
	.lh-condensed { line-height: 1.25; }
</style>

</head>
<body>
<!-- Modal -->
<div class="container">
  <div>
    <div>
    <form class="card p-2" name="orders" action="orders.php" method="post">
      <div class="bg-dark bg-gradient">
        <h5 class="text-white p-3">CHECKOUT FORM</h5>
      </div>
      <div>
      <div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="h4">Your cart</span>
				<span class="badge rounded-pill bg-secondary ms-3">
                
					<?php

if(isset($_SESSION['cart'])){
  echo count($_SESSION['cart']); 
}
else{
echo 0;
}
?>
</span>
				<?php
$total=0;
		$sno=1;
		foreach($_SESSION['cart'] as $keys=>$values)
		{
			$amt=$values["qty"]*$values["price"];
		$gst=$amt*18/100;
		$gt=$amt+$gst;
		$total+=$gt;
			echo "
                <span class='badge badge-secondary badge-pill'>3</span>
            </h4>
            <ul class='list-group mb-3 '>
                <li class='list-group-item d-flex justify-content-between lh-condensed'>
                    <div>
                        <h6 class='my-0'>{$values["name"]}</h6>
                        <small class='text-muted'>Brief description</small>
                    </div>
                    <span class='text-muted'>RS.$gt</span>
                </li>
            
				";
				$sno++;
			}
			?>

<?php
			echo "
			
                <li class='list-group-item d-flex justify-content-between'>
                    <span>Total (INR)</span>
                    <strong>RS.{$total}</strong>
                </li>
            </ul>

			";
		?>
           
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            <!-- </form> -->
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <!-- <form class="needs-validation" novalidate=""> -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="uname">Name</label>
                        <input type="text" class="form-control" id="uname"  value="  <?php  echo $_SESSION['uname']; ?>">
                        <div class="invalid-feedback"> Valid Name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value=" <?php  echo $_SESSION['email']; ?>">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                </div>
            
              
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" value="<?php  echo $_SESSION['address']; ?>" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2"  name="address2" required="">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select name="country" class="custom-select d-block w-100 h-50" id="country" required="">
                            <option value="">Choose...</option>
							<option value="India">India</option>
                        </select>
                        <div class="invalid-feedback"> Please select a valid country. </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select name="state" class="custom-select d-block w-100 h-50" id="state" required="">
                            <option value="">Choose...</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Trichy">Trichy</option>
                            <option value="kaniyakumari">kaniyakumari</option>
                            <option value="Coimbatore">Coimbatore</option>
                            <option value="Dindugal">Dindugal</option>
                            <option value="Madurai">Maduari</option>
                        </select>
                        <div class="invalid-feedback"> Please provide a valid state. </div>
                    </div>
                  
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="number" class="form-control" id="zip" placeholder="" name="zip" required="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="phno">Phone Number</label>
                        <input type="number" class="form-control" id="phno" placeholder="" name="phno" required="">
                    </div>
                    <div>
        </div>
                    <hr class="mb-4">
                    <button type="button" class="btn btn-dark btn-lg">
  Credit Card  <div class="pull-right">
                                    <i class="fa fa-cc-amex text-success"></i>
                                    <i class="fa fa-cc-mastercard text-warning"></i>
                                    <i class="fa fa-cc-discover text-danger"></i>
                                </div>
</button>
<div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="nameoncard" placeholder="Name On Card" name="nameoncard" required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="cardnumber" placeholder="Card Number" name="cardnumber" required="">
                    </div>
                    <div class="col-md-5 mb-3">
                        <input type="number" class="form-control" id="cvc" placeholder="CVC" name="cvc" required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="number" class="form-control" id="expirymonth" placeholder="expirymonth" name="expirymonth" required="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="number" class="form-control" id="expiryyear" placeholder="expiryyear" name="expiryyear" required="">
                    </div>


                     <div>
                        <input type='hidden' class='form-control' id='amt' value="`$gt`">
                    </div>
                  
                </div>
               
        </div>
    </div>
</div>
      </div>
      <div>
		<button class="btn btn-dark btn-block" type="submit" name="paid" >Continue to checkout</button>
            </form>
      </div>
    </div>
  </div>
</div>


    </body>
    </html>