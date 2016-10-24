<?php session_start();?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Form Error</title>
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
          <li class="active">Form Error</li>
        </ol>
      </div> <!-- row -->
      
      <div class="row">
      	<div class="col-md-12">
        	<h1 class="pageTitle">Form Error</h1>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
                  
        <div class="row">
          <div class="col-md-12">
            <p>I'm afraid there has been a problem sending the data you've entered.</p>
        		<p>Please ensure you've completed any required fields, including the reCaptcha used to protect against SPAM.</p>     
        		<p><a href="javascript: history.go(-1)">Click here to return to the form without losing the data entered.</a></p>
          </div> <!-- col-md-12 -->
        </div> <!-- row -->

   		<?php include 'includes/our-service.php'; ?>
      
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
