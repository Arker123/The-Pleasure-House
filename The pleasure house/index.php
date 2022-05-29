<?php

	session_start();
	
	include 'includes/db.php';
	
	include 'includes/function.php';
	
	
	
?>
<!doctype html>
<html lang="en">
  <head>
  
  <link rel="preload" as="image" href="icon/fb.png">
	<link rel="preload" as="image" href="icon/fb_change.png">
	<link rel="preload" as="image" href="icon/insta.png">
	<link rel="preload" as="image" href="icon/insta_change.png">
	<link rel="preload" as="image" href="icon/youtube.png">
	<link rel="preload" as="image" href="icon/youtube_change.png">
	<link rel="preload" as="image" href="images/source.gif">
	
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script src="https://kit.fontawesome.com/a26e0633fc.js" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#4285f4">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
	<link href="style/common.css" rel="stylesheet">
	<link href="style/index.css" rel="stylesheet">

		 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="script/jquery.ui.autocomplete.scroll.min.js"></script>	

	
    <title>The Pleasure House</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Fuzzy+Bubbles&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Montserrat+Alternates&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Yuji+Hentaigana+Akebono&display=swap');
	</style>

  </head>
  <body>
<div class="se-pre-con"></div>
  <!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top link bg-light" id="myNavBar">
  <?php   
    include("includes/nav.php");
    ?>
</nav>

<div id="home">
	<div class="container">
		<div class="main-content-ad">
			<!--
			<div class="center-bc">
				<h1 class="bold-text">Men<span class="red">u</span></h1>
			</div>
			-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 center-bc">
						<h1>it's not just <br> Food, It's an <br> Experience.</h1>
					</div>
					<div class="col-md-6">
						<div class="img-wrapper-ad">
							<img src="images/main.jpg">
						</div>
					</div>
				</div>
			</div>
			<div class="container" style="margin:60px 0;">
				<div class="row get_my_food">
					<div class="col-md-4 col-sm-6 center-responsive h-100">
						<div class="card h-80">
										<img src="images/breakfast.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Rajma Chawal</h5>
											<p><span class="card-text"><big class="text-muted"> &#8377; 500</big></span></p>
											<p><a class="btn btn-primary btn-lg mybutton" href="product-Details.php?pro_id=$pro_id" role='button'  ><span>ADD TO CART</span></a></p>
										</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center-responsive h-100">
						<div class="card h-80">
										<img src="images/breakfast.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Chole Bhature</h5>
											<p><span class="card-text"><big class="text-muted"> &#8377; 500</big></span></p>
											<p><a class="btn btn-primary btn-lg mybutton" href="product-Details.php?pro_id=$pro_id" role='button'  ><span>ADD TO CART</span></a></p>
										</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center-responsive h-100">
						<div class="card h-80">
										<img src="images/breakfast.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Dal Makhni</h5>
											<p><span class="card-text"><big class="text-muted"> &#8377; 500</big></span></p>
											<p><a class="btn btn-primary btn-lg mybutton" href="product-Details.php?pro_id=$pro_id" role='button'  ><span>ADD TO CART</span></a></p>
										</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center-responsive h-100">
						<div class="card h-80">
										<img src="images/breakfast.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Rajma Chawal</h5>
											<p><span class="card-text"><big class="text-muted"> &#8377; 500</big></span></p>
											<p><a class="btn btn-primary btn-lg mybutton" href="product-Details.php?pro_id=$pro_id" role='button'  ><span>ADD TO CART</span></a></p>
										</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center-responsive h-100">
						<div class="card h-80">
										<img src="images/breakfast.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Chole Bhature</h5>
											<p><span class="card-text"><big class="text-muted"> &#8377; 500</big></span></p>
											<p><a class="btn btn-primary btn-lg mybutton" href="product-Details.php?pro_id=$pro_id" role='button'  ><span>ADD TO CART</span></a></p>
										</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 center-responsive h-100">
						<div class="card h-80">
										<img src="images/breakfast.jpg" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Dal Makhni</h5>
											<p><span class="card-text"><big class="text-muted"> &#8377; 500</big></span></p>
											<p><a class="btn btn-primary btn-lg mybutton" href="product-Details.php?pro_id=$pro_id" role='button'  ><span>ADD TO CART</span></a></p>
										</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
			<div class="panel-footer">
				<button class="btn-ad next-btn pull-right details-btn home-next">Next Step</button>
				<div style="clear:both;"></div>
			</div>
			
		
	</div>
</div>


<div id="cart-ad">
	<div class="container">
		<div class="main-content-ad">
	<div class="row">
		<div id="cart" class="col-md-9">
				<form method="post">
					<h1>Shopping Cart</h1>
					<p class="text-muted cart-no-of-items">You currently have <?php //cartNoOfItems() ?> item(s) in your cart</p>
					<div class="table-responsive">
							   <table class="table table-hover">
								   <thead>
									   <tr>
											<th colspan="1">#</th>
										   <th colspan="1">Food Item</th>
										   <th>Unit Price</th>
										   <th>Quantity</th>
										   <th colspan="1">Sub-Total</th>
									   </tr>
								   </thead>
								   <?php //getCartItems() ?>
									<tbody class="main-cart-data">
										
									</tbody>
							   </table>
					</div>
				</form>
		</div>
		
		<div class="col-md-3">
			<div class="box-header"><!-- box-header Begin -->
				<h3>Order Summary</h3>
			</div><!-- box-header Finish -->
					   
			<p class="text-muted">Shipping and additional costs are calculated based on value you have entered</p>
					   
					   <div class="table-responsive"><!-- table-responsive Begin -->
						   
						   <table class="table table-hover table-striped"><!-- table Begin -->
							   
							   <tbody><!-- tbody Begin -->
								   
								   <tr><!-- tr Begin -->
									   
									   <td> Order Sub-Total </td>
									   <td class="order-sub-total"> &#8377; <?php //cartSubtotal() ?> </td>
									   
								   </tr><!-- tr Finish -->
								   
								   <tr><!-- tr Begin -->
									   
									   <td> Handling </td>
									   <td> &#8377;50 </td>
									   
								   </tr><!-- tr Finish -->
								   
								   <tr><!-- tr Begin -->
									   
									   <td> Tax (18% GST) </td>
									   <td class="gst"> &#8377; </td>
									   
								   </tr><!-- tr Finish -->
								   <tr class="total"><!-- tr Begin -->
									   <td> Total </td>
									   <td class="total-ad"> &#8377;<?php //cartSubtotal() ?> </td>
								   </tr>
							   </tbody>
						   </table>
					   </div>
		</div>
		
	</div>
	</div>
	<div class="panel-footer">
				<button class="btn-ad next-btn pull-right order-btn cart-next">Next Step</button>
				<button class="btn-ad back-btn pull-left cart-back">Back</button>
				<div style="clear:both;"></div>
			</div>
			
	
</div>
</div>
</div>

<div id="scan">
	<div class="container">
		<div class="main-content-ad">
			<div class="row">
				<div class="col-md-12 center-bc">
					<img src="images/qr.jpg" width="40%">
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<button class="btn-ad next-btn pull-right order-btn scan-next">Next Step</button>
			<button class="btn-ad back-btn pull-left scan-back">Back</button>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>

<div id="review">
	<div class="container">
		<div class="main-content-ad">
			<div class="center-bc">
				<h1 class="bold-text">Tell us about your experience</h1>
			</div>
			<div class="row">
				<div class="col-md-12 center-bc">
					<div class="table-responsive">
						   <table class="table table-hover table-striped">
								<thead>
									   <tr>
										   <th colspan="1">#</th>
										   <th>Name</th>
										   <th>Image</th>
										   <th colspan="1">Rating</th>
										   <th colspan="2">Review</th>
									   </tr>
								</thead>
							   <tbody>
								   <tr>
										<td>1</td>
										<td> Rajma Chawal </td>
										<td><img src="images/breakfast.jpg" width="200px"></td>
										<td>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
											<i class="far fa-star"></i>
										</td>
										<td><textarea></textarea></td>
								   </tr>
							   </tbody>
						   </table>
					   </div>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<!--<button class="btn-ad back-btn pull-left review-back">Back</button>-->
			<button class="btn-ad next-btn pull-right order-btn review-next">Next Step</button>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>

<div id="thank">
	<div class="container">
		<div class="main-content-ad">
			<div class="row">
				<div class="col-md-12 center-bc">
					<img src="images/thank-you.jpg" width="80%">
				</div>
			</div>
		</div>
	</div>
</div>


<?php 
    
    include("includes/footer.php");
    
?>

<script>

$('.home-next').click(function(){
	$('#home').hide();
	$('#cart-ad').show();
});
$('.cart-next').click(function(){
	$('#cart-ad').hide();
	$('#scan').show();
});
$('.scan-next').click(function(){
	$('#scan').hide();
	$('#review').show();
});
$('.review-next').click(function(){
	$('#review').hide();
	$('#thank').show();
});


$('.cart-back').click(function(){
	$('#cart-ad').hide();
	$('#home').show();
});
$('.scan-back').click(function(){
	$('#scan').hide();
	$('#cart-ad').show();
});


</script>

<script>
	var action = "get_my_food"

	$.ajax({
		url:"support/support.php",
		method:"POST",
		data:{action:action},
		
		success:function(data){
			$('.get_my_food').html(data);
		}
	});
</script>

<script>
	var cart = []
		
	function updateCartIcon()
	{
		var data = '';
		
		for(var i=0;i<cart.length;i++)
		{
			data += ('<tr><td>'+(i+1)+'</td><td>'+cart[i][0]+'</td><td>'+cart[i][1]+'</td><td>'+cart[i][2]+'</td></tr>');
		}
		
		$('.table-body-ad').html(
			'<tr><th>#</th><th>Name</th><th>Price</th><th>Quantity</th></tr>' + data
			
		);
		
		var total_qty = 0;
		for(var i=0;i<cart.length;i++)
		{
			total_qty += cart[i][2];
		}
		
		$('.cart-nav-circle').html(total_qty);
		$('.cart-no-of-items').html('You currently have ' +total_qty+ ' item(s) in your cart');
		
		data = '';
		
		for(var i=0;i<cart.length;i++)
		{
			data += ('<tr><td>'+(i+1)+'</td><td>'+cart[i][0]+'</td><td>'+cart[i][1]+'</td><td>'+cart[i][2]+'</td><td>'+(cart[i][1]*cart[i][2])+'</td></tr>');
		}
		
		$('.main-cart-data').html(data);
		
		var subTotal = 0;
		
		for(var i=0;i<cart.length;i++)
		{
			subTotal += (cart[i][2]*cart[i][1]);
		}
		
		$('.order-sub-total').html(subTotal);
		
		var gst = (subTotal*18)/100 + subTotal;
		$('.gst').html(gst);
		
		var totalPrice = gst + 50;
		$('.total-ad').html(totalPrice);
		
		
	}
	
	function add_to_cart(name,price)
	{
		//console.log(name,price);
		found = false;
		pos = 0;
		for(var i=0;i<cart.length;i++)
		{
			if(cart[i][0] == name)
			{
				found = true;
				pos = i;
				break
			}
		}
		
		if(found == true)
		{
			cart[pos][2] += 1;
		}
		else
		{
			const data = [name, price, 1];
			cart.push(data);
		}
		console.log(cart)
		updateCartIcon();
	}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <script src="script/nav.js"></script>
<script src="script/footer.js"></script> 
 <script src="script/index.js"></script>	

  </body>
</html>