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
                <label class="checkbox">
                  <input type="checkbox" value="remember-me">Remember me</input>
              </label>
              <button class="btn btn-primary" type="submit" value="Login">Sign in</button>
          </form>

      </div>



