
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
 
       <!-- navigation -->

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li <?php if (current_url() === site_url() . "/infonights") {echo "class='active'";} ?>><a href="<?php echo site_url('infonights'); ?>">Info nights</a></li>
      <li <?php if (current_url() === site_url() . "/cases") {echo "class='active'";} ?>><a href="<?php echo site_url('cases'); ?>">Cases</a></li>
      <li <?php if (current_url() === site_url() . "/knowledgelibrary") {echo "class='active'";} ?>><a href="<?php echo site_url('knowledgelibrary'); ?>">Library</a></li>
      <?php if($privilege >= 50) : ?>
      <li <?php if (current_url() === site_url() . "/admin") {echo "class='active'";} ?>><a href="<?php echo site_url('admin') ?>">Admin</a></li>
      <?php endif; ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url('userprofile'); ?>"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?></a></li>
      <li><a href="<?php echo site_url('logout'); ?>">Log out</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>