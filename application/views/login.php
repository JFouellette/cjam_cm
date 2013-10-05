<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->

            <div class="container">
                <?php $formclass = array('class' => 'form-signin');
                echo form_open('verifylogin', $formclass); ?>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" class="input-block-level" value="<?php echo set_value('username'); ?>" placeholder="Email address" id="username" name="username">
                <input type="password" class="input-block-level" placeholder="Password" value="<?php echo set_value('password'); ?>" id="password" name="password">
              <button class="btn btn-primary" type="submit" value="Login">Sign in</button>
          </form>

      </div>

<!-- scripts -->
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
<!-- body et html closed in footer.php -->


