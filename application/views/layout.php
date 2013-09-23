<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <meta name="" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/main.css">
        
        <script src="<?php echo base_url()."assets/";?>js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
       <!-- navigation -->

    <div class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>">CJAM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url('infonights'); ?>">Info nights</a></li>
            <li><a href="<?php echo site_url('cases'); ?>">Cases</a></li>
            <li><a href="<?php echo site_url('knowledgelibrary'); ?>">Library</a></li>
            <li><a href="<?php echo site_url('admin') ?>">Users</a></li>
          </ul>
            <p class="navbar-text pull-right">You are logged in as <a href="<?php echo site_url('userprofile'); ?>">Username</a>. <a href="#">Log out</a></p>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <div class="container">

      <h1>Bootstrap starter template</h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

       <!-- content -->

        <div class="container">
            <h1>Hello World!</h1>
            <p>Hello world! This is HTML5 Boilerplate.</p>
        </div> <!-- /.container -->
        
       
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()."assets";?>js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo base_url()."assets/";?>js/vendor/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url()."assets/";?>js/plugins.js"></script>
        <script src="<?php echo base_url()."assets/";?>js/main.js"></script>
        <script src="<?php echo base_url()."assets/";?>js/vendor/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
