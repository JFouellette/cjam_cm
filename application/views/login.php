<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->

            <div class="container">
                
                <?php
                $formclass = array('class' => 'form-signin', 'role' => 'form');
                echo form_open('verifylogin', $formclass);
                echo validation_errors('<div class="alert alert-danger">', '</div>');
                ?>

                <h2 class="form-signin-heading">Please sign in</h2>

                 <div class="form-group">
                  <label for="username">Email address</label>
                  <input type="text" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Email address" id="username" name="username">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>" id="password" name="password">
                </div>                
                
                
              <button class="btn btn-default" type="submit" value="Login">Sign in</button>
          
          </form>

      </div>
