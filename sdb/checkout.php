<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Checkout</title>

    <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
  </head>

<!--navbar-->
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand">
            <u>
                <img src="https://i.ibb.co/XpwRmb8/logo.png" width="80px"  display="inline-block"></a>
            </u>
        </a>
     
    </div>
    </nav>

<!--end of navbar-->


    <div class="container">
      <main>
        <div class="py-5 text-center">
          <h2>Checkout Form</h2>You are one step away from delivering your favorite Siomai, quick, do it now!</p>
          <hr>
        </div>
        
          
          <div class="row g-5 border border-dark"> 
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-danger">Your Cart</span> 
              <span class="badge bg-danger rounded-pill">3</span>
              </h4> <hr>
            <ul class="list-group mb-3 border border-danger">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Beef</h6>
                  <small class="text-muted">1 Pack(s)</small>
                </div>
                <span class="text-muted">&#8369;50</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Chicken</h6>
                  <small class="text-muted">1 Pack(s)</small>
                </div>
                <span class="text-muted">&#8369;45</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Pork and Shrimp</h6>
                  <small class="text-muted">1 Pack(s)</small>
                </div>
                <span class="text-muted">&#8369;40</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo Code</h6>
                  <small>IVYSHISHOU</small>
                </div>
                <span class="text-success">−&#8369;10</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>&#8369;125</strong>
              </li>
            </ul>

            <h4 class="mb-3">Payment</h4>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Credit Card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Debit Card</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">GCash</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">Cash on Delivery</label>
                </div>
              </div>
         
            <!--<form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>-->
          </div>

          <div class="col-md-7 col-lg-8">
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <h4 class="mb-3">Billing Address</h4>
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
    
                <!--<div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>-->
    
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
    
                <!--<div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>-->
    
              <hr class="my-4">
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>
    
              <hr class="my-4">
    
              
           
              
              <!--<div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
    
                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>-->
              
              
    
              
          </div>
        </div>
      </div> 
      <br>
          <!-- Button trigger modal -->
       <a href="cart.php" class="btn1 btn-danger btn-lg" role="button">Back to Cart</a>

        <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Continue to Checkout
        </button>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              We've received your purchase request;
                  we'll be in touch shortly!
              </div>
              <div class="modal-footer">
                <a href="index.php"> Back to Home </a>
              </div>
            </div>
          </div>
        </div>
            </form>
      </main>
</div>
    <!-- Start of Footer -->
<!-- Remove the container if you want to extend the Footer to full width. -->
<br>
<footer class="text-white text-center text-lg-start bg-dark">
	  <!-- Grid container -->
	  <div class="container p-4">
		<!--Grid row-->
		<div class="row mt-4">
		  <!--Grid column-->
		  <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
			<h5 class="text-uppercase mb-4">Shishou's Teachings</h5>
  
			<p>
			  Taste the Siomai that captivated people of it's richness on flavor.
			</p>
  
			<p>
			  We are now delivering Siomai to the doorstep of your home, Shishou's Siomai is only a few call/chat away! 
			</p>
  
	
		  </div>
		  <!--Grid column-->
		  <!--Grid column-->
		  <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
			<h5 class="text-uppercase mb-4 pb-1">STORE INFORMATION</h5>
  
			<!--<div class="form-outline form-white mb-4">
			  <input type="text" id="formControlLg" class="form-control form-control-lg" />
			  <label class="form-label" for="formControlLg">Search</label>
			</div>-->
  
			<ul class="fa-ul" style="margin-left: 1.65em;">
			  <li class="mb-3">
				<span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
					<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
				  </svg></span><span class="ms-2">Mandaluyong City, Philippines</span>
			  </li>
			  <li class="mb-3">
				<span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
					<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
				  </svg></span><span class="ms-2">shishousiomai@gmail.com</span>
			  </li>
			  <li class="mb-3">
				<span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
					<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
				  </svg></span><span class="ms-2">+ 63 234 567 88</span>
			  </li>
			</ul>
		  </div>
		  <!--Grid column-->
  
		  <!--Grid column-->
		  <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
			<h5 class="text-uppercase mb-4">Opening hours</h5>
  
			<table class="table text-center text-white">
			  <tbody class="fw-normal">
				<tr>
				  <td>Mon - Thu:</td>
				  <td>9am - 6pm</td>
				</tr>
				<tr>
				  <td>Fri - Sat:</td>
				  <td>9am - 5pm</td>
				</tr>
				<tr>
				  <td>Sunday:</td>
				  <td>9am - 3pm</td>
				</tr>
			  </tbody>
			</table>
		  </div>
		  <!--Grid column-->
		</div>
		<!--Grid row-->
	  </div>
	  <!-- Grid container -->
	  <!-- Copyright -->
	  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		© 2021 Copyright:
		<a class="text-white" href="#">Works of Ivy</a>
	  </div>
	  <!-- Copyright -->
	</footer>
  </div>
  <!-- End of .container -->  

    
    <!-- Scripts-->
    <script type="text/javascript" src="form-validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
  