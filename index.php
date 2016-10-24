<?php session_start();?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>build</title>
    <meta name="description" content="">

		<?php include 'includes/head.php'; ?>

  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


		<?php include 'includes/header.php'; ?>
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/slider/slide-1.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="images/slider/slide-2.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="images/slider/slide-3.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="images/slider/slide-4.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="images/slider/slide-5.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="images/slider/slide-6.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="images/slider/slide-7.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="images/slider/slide-8.jpg" alt="">
          <div class="carousel-caption"></div>
        </div>
      </div> <!-- carousel-inner -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
      </ol>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!-- carousel-example-generic -->

    <div class="container">
    	
      <div id="productSearch" class="row">
        <div class="col-md-6">
        	<h3>Do you know your part number?</h3>
          <p>To help speed up your order, enter your Part Number or Product Name here</p>
        </div> <!-- col-md-6 -->
        <div class="col-md-6">
        	<form action="index.php" method="GET" name="productSearch">
          	<input type="text" name="productSearch" placeholder="ENTER YOUR PART NUMBER HERE" />
            <input type="submit" name="submit" value="" />
        	</form>
        </div> <!-- col-md-6 -->
      </div> <!-- productSearch row -->
      
      <div id="demoRange" class="row">
        <div class="col-md-6 gapFix">
        	<p><strong>Product Demonstration</strong><br/>View our product videos<br/>&nbsp;</p>
          <p>Product demonstration</p>
        </div> <!-- col-md-6 -->
        <div class="col-md-6 gapFix">
        	<p><strong>Missions Clean Hands</strong><br/>A convenient solution to your skin care needs</p>
          <p>View our product range</p>
        </div> <!-- col-md-6 -->
      </div> <!-- demoRange row -->
      
      <div id="deliverySignUp" class="row">
        <div class="col-md-6">
        	<h3>Next day delivery</h3>
          <h4>You still have</h4>
          <div id="TDwrapper">
          	<div class="clock" id="clock-a"></div>
            <div class="clock" id="clock-b"></div>
            <div class="clock" id="clock-c"></div>
        	</div>
          <h4>to place your order and to guarantee next day delivery</h4>
        </div> <!-- col-md-6 -->
        <div class="col-md-6">
        	<h4>Sign up for emails</h4>
          <p>Please enter your details to receive the new products and promotions from Berner.</p>
          <form>
          	<input type="text" name="firstName" placeholder="First Name" tabindex="101" />
            <input type="text" name="lastName" placeholder="Last Name" tabindex="102" />
            <input type="email" name="email" placeholder="Email Address" tabindex="103" />
            <input type="submit" name="submit" value="SUBMIT" tabindex="104" />
          </form>
        </div> <!-- col-md-6 -->
      </div> <!-- demoRange row -->
      
			<?php include 'includes/special-offers.php'; ?>

    </div> <!-- container -->
    
    <?php include 'includes/footer.php'; ?>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
<script type="text/javascript" src="scripts/vendor/jquery.countdown.min.js"></script>


    <script type="text/javascript">

      var now = new Date();

  var curHrs = parseInt(now.getHours())
  var dayToGo = parseInt(now.getDate());

  if(curHrs >= 14){
    dayToGo = dayToGo + 1;
  }

  var targetDate = now.getFullYear()+'/' + (now.getMonth()+1)+'/' + dayToGo + ' 14:00:00'

  $('#TDwrapper').countdown(targetDate, function(event) {
    $('#clock-a').html(event.offset.hours + '<span>H</span>');
    $('#clock-b').html(event.offset.minutes + '<span>M</span>');
    $('#clock-c').html(event.offset.seconds + '<span>S</span>');
  });

    </script>
</body>
</html>
