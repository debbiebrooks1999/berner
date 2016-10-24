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
    
    <div class="container">
      <div class="row shallow">
      	<ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Contact Us</li>
        </ol>
      </div> <!-- row -->

      <div class="row shallow">
      	<div class="col-md-12">
        	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:1140px;'><div id='gmap_canvas' style='height:440px;width:1140px;'></div><div><small><a href="http://www.embedgooglemaps.com/en/">Generate your map here, quick and easy!									Give your customers directions									Get found</a></small></div><div><small><a href="https://binaireoptieservaringen.nl/">Wilt u geld verdienen met de handel in binaire opties, maar is het allemaal onduidelijk hoe dit precies werkt, en welke aanbieders betrouwbaar zijn? Lees dan verder op onze site: wij vergelijken aanbieders op betrouwbaarheid en kwaliteit. Zo komt u nooit voor verrassingen te staan. Wij van binaireoptieservaringen.nl helpen u graag!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(56.0557706,-3.4479185000000143),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(56.0557706,-3.4479185000000143)});infowindow = new google.maps.InfoWindow({content:'<strong>Berner</strong><br>Dunfermline, Fife, KY11 8UQ<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->      
      
      <div class="row">
      	<div class="col-md-12">
        	<h1 class="pageTitle">Contact Us</h1>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
      
      <div class="row">
      	<div class="col-md-12">
        	<p>If you have an enquiry please complete the form below and we will get back to you as soon as possible. Thank you.</p>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
    	
      <form action="contact-us.php" method="post" name="contactUs" id="contactUs">
      
        <div class="row">
          <div class="col-md-6">
            <input type="text" name="name" placeholder="Name" tabindex="101" />
            <input type="text" name="addressLine1" placeholder="Address Line 1" tabindex="102" />
            <input type="text" name="addressLine2" placeholder="Address Line 2" tabindex="103" />
            <input type="text" name="cityTown" placeholder="City/Town" tabindex="104" />
            <input type="text" name="regionCounty" placeholder="Region/County" tabindex="105" />
            <input type="text" name="country" placeholder="Country" tabindex="106" />
            <input type="text" name="postcode" placeholder="Postcode" tabindex="107" />
          </div> <!-- col-md-6 -->
          <div class="col-md-6">
            <input type="tel" name="telNo" placeholder="Tel No." tabindex="108" />
            <input type="tel" name="faxNo" placeholder="Fax No." tabindex="109" />
            <input type="email" name="email" placeholder="Email" tabindex="110" />
            <textarea name="enquiry" placeholder="Enquiry" tabindex="111"></textarea>
          </div> <!-- col-md-6 -->
        </div> <!-- row -->
        
        <div class="row">
          <div class="col-md-12">
            <input type="submit" name="submit" value="SUBMIT" tabindex="112" />
          </div> <!-- col-md-12 -->
        </div> <!-- row -->
      
      </form>
   
      
    </div> <!-- container -->
    
    <?php include 'includes/footer.php'; ?>

    <script src="scripts/c35baf9e.vendor.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>


    <script src="scripts/aac105ab.main.js"></script>
    <script type="text/javascript">
          localStorage.setItem("username", "Web5" ); 

      console.log('username' + localStorage.getItem("username"))
    </script>
</body>
</html>
