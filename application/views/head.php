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
        <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/bootstrap-theme.min.css">
        <?php 
        if(isset($css)) {
        echo $css;
        }?>
        <script src="<?php echo base_url()."assets/";?>js/vendor/modernizr-2.6.2.min.js"></script>
    </head>