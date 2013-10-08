<div class="container">
  <h1 class="pull-left"><?php echo $title; ?></h1>
</div>

<div class="container">
    <h3>Edit your profile</h3>
    <br/>

<form class="form-horizontal" role="form" id="user-data">
 
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputName" placeholder="Name" value="<?php echo $name ;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputEmail1" placeholder="Email" value="<?php echo $email ;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-5">
      <input type="tel" class="form-control" id="inputPhone" placeholder="Phone" value="<?php echo $phone ; ?>">
    </div>
  </div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default" disabled="disabled">Save changes</button>
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

<form class="form-horizontal" id="user-password">
  <div class="form-group">
    <label for="inputOldPassword" class="col-sm-2 control-label">Old Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputOldPassword" placeholder="Old Password">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword1" class="col-sm-2 control-label">New Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword" placeholder="New Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword2" class="col-sm-2 control-label">Retype Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword2" placeholder="Retype Password">
    </div>
  </div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" disabled="disabled" class="btn btn-default">Set New Password</button>
    </div>
  </div>

</form>

</div> <!-- /.container -->
