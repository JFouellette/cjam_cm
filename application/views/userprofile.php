<div class="container">
  <h1 class="pull-left"><?php echo $title; ?></h1>
</div>

<div class="container">
    <h3>Edit your profile</h3>
    <br/>

<form class="form-horizontal" role="form" id="user-data" method="post">
 
<?php
if ($flashsuccess): ?>
<div id="flash" class="alert alert-success"><p>
  <?php echo $flashsuccess; ?>
</p></div>
<?php endif; ?>

<?php
if ($flashfailure): ?>
<div id="flash" class="alert alert-danger"><p>
  <?php echo $flashfailure; ?>
</p></div>
<?php endif; ?>


  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-5">
      <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Name" value="<?php echo $name ;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="email" name="inputEmail" class="form-control" id="inputEmail1" placeholder="Email" value="<?php echo $email ;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-5">
      <input type="tel" name="inputPhone" class="form-control" id="inputPhone" placeholder="Phone" value="<?php echo $phone ; ?>">
    </div>
  </div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default" disabled="disabled" value="Submit">Save changes</button>
    </div>
  </div>

</form>

</div>

<script>
var initialValues = eval(<?php echo $initial_values; ?>);
</script>

<!-- Change password form -->

<div class="container">
    <h3>Change your password</h3>
    <br/>

<?php
if ($flash_pass_success): ?>
<div id="flash" class="alert alert-success"><p>
  <?php echo $flash_pass_success; ?>
</p></div>
<?php endif; ?>

<?php
if ($flash_pass_failure): ?>
<div id="flash" class="alert alert-danger"><p>
  <?php echo $flash_pass_failure; ?>
</p></div>
<?php endif; ?>


<form class="form-horizontal" id="user-password" role="form" method="post">
  <div class="form-group">
    <label for="inputOldPassword" class="col-sm-2 control-label">Old Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="inputOldPassword" id="inputOldPassword" placeholder="Old Password">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword1" class="col-sm-2 control-label">New Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="inputNewPassword" id="inputNewPassword" placeholder="New Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword2" class="col-sm-2 control-label">Retype Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="inputNewPassword2" id="inputNewPassword2" placeholder="Retype Password">
    </div>
  </div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default" value="Submit">Set New Password</button>
    </div>
  </div>

</form>

</div> <!-- /.container -->
