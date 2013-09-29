
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
            <li <?php if (current_url() === site_url() . "/infonights") {echo "class='active'";} ?>><a href="<?php echo site_url('infonights'); ?>">Info nights</a></li>
            <li <?php if (current_url() === site_url() . "/cases") {echo "class='active'";} ?>><a href="<?php echo site_url('cases'); ?>">Cases</a></li>
            <li <?php if (current_url() === site_url() . "/knowledgelibrary") {echo "class='active'";} ?>><a href="<?php echo site_url('knowledgelibrary'); ?>">Library</a></li>
            <li <?php if (current_url() === site_url() . "/admin") {echo "class='active'";} ?>><a href="<?php echo site_url('admin') ?>">Users</a></li>
          </ul>
            <p class="navbar-text pull-right">Signed in as <a href="<?php echo site_url('userprofile'); ?>"><?php echo $username; ?></a> | <a href="<?php echo site_url('logout'); ?>">Log out</a></p>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container">

      <h1><?php echo $title; ?></h1>
        <h1 class="pull-right">Today is (date)</h1>

        <?php echo site_url()."infonights";?>
        <?php echo current_url();?>

    </div>

       <!-- content -->

        <div class="container">
            <h1>Hello World!</h1>
            <p>Hello world! This is HTML5 Boilerplate.</p>
        </div> <!-- /.container -->


<!-- body et html closed in footer.php -->
