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
          <li class="active">About Berner</li>
        </ol>
      </div> <!-- row -->
      
      <div class="row shallow">
      	<nav>
          <ul class="subMenu">
          	<li class="active">About Berner</li>
            <li><a href="our-history.php">Our History</a></li>
            <li><a href="our-customers.php">Our Customers</a></li>
          </ul>
        </nav>
      </div> <!-- row -->

      <div class="row">
      	<div class="col-md-12">
        	<img src="images/hero-shots/about-berner.jpg" class="img-responsive" alt="About Berner"/>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->      
      
      <div class="row">
      	<div class="col-md-12">
        	<h1 class="pageTitle">Berner UK Limited</h1>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
      
      <div class="row">
      	<div class="col-md-12">
        	<h4>
          	Berner UK Ltd. supplies engineering and automotive products, hand and power tools, janitorial, PPE and workshop consumables throughout the UK, primarily to customers in the bus and coach and transportation markets. We also have very strong links with and serve local authorities and utilities markets by providing and developing a diverse range of products and service to meet new industry developments.
          </h4>
          <p>
          	We understand what matters to our customers in markets that are increasingly competitive and, with 40 years’ experience; we believe we provide the highest quality of service and very best products. Our service goes beyond the supply and distribution of products – it’s about understanding our customers’ needs.
          </p>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
      
      <div id="historyCustomers" class="row">
        <div class="col-md-6 gapFix">
        	<p><strong>History of Berner</strong><br/>1957-2011<br/>&nbsp;</p>
          <p>View more details</p>
        </div> <!-- col-md-6 -->
        <div class="col-md-6 gapFix">
        	<p><strong>Our Customers</strong><br/>Berner's highest priority is a contant focus on the needs of our customers.</p>
          <p>View more details</p>
        </div> <!-- col-md-6 -->
      </div> <!-- demoRange row -->
      
     	<div class="row">
      	<div class="col-md-12">
        	<h2 class="subTitle">Berner: a strong brand</h2>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
      
      <div class="row">
      	<div class="col-md-12">
          <p>
          	Berner. Experts with passion. For over 50 years, the Berner brand stands for reliability, safety, partnership and individually tailored advice. Berner sees itself as an innovative and competent partner, reacting actively to customer and market develop­ments and offering tailor-made solutions and services. The name Berner will continue to stand for these values in the future.
          </p>
          <p>
          	As a pan-European business, Berner has many years of experience and expertise in the industry. The direct sales company understands its customers and is not only a supplier but also a partner, who is ready to provide support and advice whenever it is needed.
          </p>
          <p>“Experts with passion” brings the way people work to a point. Since its early years the company has been characterized by the combination of expertise and enthusiasm.</p>
          </p>
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
