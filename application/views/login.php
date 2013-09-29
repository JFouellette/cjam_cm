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
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap-responsive.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/main.css">

    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

</head>
<body style>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->

            <div class="container">

              <form class="form-signin">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" class="input-block-level" placeholder="Email address">
                <input type="password" class="input-block-level" placeholder="Password">
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
              </label>
              <button class="btn btn-large btn-primary" type="submit">Sign in</button>
          </form>

      </div>


      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="<?php echo base_url()."assets";?>js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
      <script src="<?php echo base_url()."assets/";?>js/vendor/jquery-1.10.2.min.js"></script>
      <script src="<?php echo base_url()."assets/";?>js/vendor/bootstrap.min.js"></script>
      <script src="<?php echo base_url()."assets/";?>js/plugins.js"></script>
      <script src="<?php echo base_url()."assets/";?>js/main.js"></script>
      

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
