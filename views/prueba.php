.<!--<!DOCTYPE html>-->
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="img/logo.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="css/prueba.css">
    <script src="js/prueba.js"></script>
    <!-- <link rel="stylesheet" href="js/prueba.js"> -->


    <!-- <link rel="stylesheet" href="css/indexNavbar.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"> 
    <!-- <script src="https://use.fontawesome.com/8ed3a36f97.js"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    
    <title>ZUKA S.A.C.</title>
</head>
   
    
<body>
<nav>
  <div class="mini">
    <p class="products">Empty</p>
    <p class="names"></p>
    <p class="miniprice"></p>
  </div>
  <ul>
    <li>Home</li>
    <li>Webshop</li>
    <li>Contact</li>
  </ul>
  <div class="cart icon-basket">
    <span class="number">1</span>
  </div>
</nav>
<div class="container">
  <div class="product">
    <img/>
    <h2 class="header">Product Name</h2>
    <p class="description">Nullam posuere turpis vel lacinia luctus. Donec in efficitur neque. Curabitur consectetur non ipsum in eleifend. Praesent id velit in nisi maximus porta nec vitae odio. Proin vitae magna a massa accumsan venenatis. Donec semper, sem in ullamcorper bibendum, mauris sem imperdiet lorem, tempor aliquet ligula lorem sit amet nibh. Suspendisse potenti.</p>
    <p class="price">231,-</p>
    <div class="btn">Add to cart</div>
    <div class="quickview">Quickview</div>
  </div>
</div>
<div class="quickviewContainer">
  <div class="close"></div>
  <h2 class="headline"></h2>
  <p class="description"></p>
  <img/>
  <img/>
  <img/>
</div>
<script>
    var cartCount = 0,
	 buy = $('.btn'),
	 span = $('.number'),
	 cart = $('.cart'),
	 quickview = $('.quickviewContainer'),
	 quickViewBtn = $('.quickview'),
	 close = $('.quickviewContainer .close'),
	 minicart = [],
	 totalPrice = [],
	 miniCartPrice;

buy.on('click', addToCart);
quickViewBtn.on('click', quickView);
cart.on('click', showMiniCart);
close.on('click', function(){
	quickview.removeClass('active');
});

function quickView() {
	var description = $(this).parent().find('.description').text(),
		 header = $(this).parent().find('.header').text(),
		 price = $(this).find('.price'),
		 quickViewHeader = $('.quickviewContainer .headline'),
		 quickViewDescription = $('.quickviewContainer .description');
	clearTimeout(timeQuick);
		if(quickview.hasClass('active')){
			quickview.removeClass('active');
			var timeQuick = setTimeout(function(){
				quickview.addClass('active');
			}, 300);
		} else{
			quickview.addClass('active');
		}
	
	quickViewHeader.text(header);
	quickViewDescription.text(description);
}

function showMiniCart() {
	$('.mini').toggleClass('visible');
}

function addToCart() {
	var self = $(this),
		 productName = $(this).parent().find('.header').text(),
		 miniCartNames = $('.products'),
		 names = $('.names'),
		 price = $(this).parent().find('.price').text(),
		 priceInt = parseInt(price);
	
	totalPrice.push(priceInt);
	miniCartPrice = totalPrice.reduce(function(a,b){  return a+b });
	$('.miniprice').text('Total amount: ' + miniCartPrice + ",-");
	minicart.push(productName);
	lastProduct = minicart[minicart.length - 1];
	miniCartNames.text('Your cart lines: ');
	names.append('<p>' + lastProduct + '</p>');
	
	cartCount++;
	span.text(cartCount);
	clearTimeout(time);
	if(span.hasClass('update')){
		span.removeClass('update');
		span.addClass('updateQuantity');
		var time = setTimeout(function(){
			span.removeClass('updateQuantity');
			span.addClass('update');
		}, 700);
	} else{
		span.addClass('update');
	}
	if (cartCount == 1){
		cart.toggleClass('icon-basket icon-basket-loaded');
	}
	
	$(this).addClass('ok');
	var timeOk = setTimeout(function(){
		self.removeClass('ok');
	}, 1000);
}
</script>
</body>
</html>