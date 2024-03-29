<!DOCTYPE html>
<html>
<head>
 <title> User Registration and Login System </title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
 <div class="container">
  <br />
  <h3 align="center"> User Registration</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Register</div>
   <div class="panel-body">
    <form method="post" onsubmit="return validate();"action="<?php echo base_url(); ?>register/validation">
     <div class="form-group">
      <label>Enter Your Login</label>
      <input type="text" name="user_name" class="form-control"  required value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your First Name</label>
      <input type="text" name="first_name" class="form-control" required pattern="[A-Za-zА-Яа-яЁё]{2,}" title="First Name should only contain letters"  value="<?php echo set_value('first_name'); ?>" />
      <span class="text-danger"><?php echo form_error('first_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Last Name</label>
      <input type="text" name="last_name" class="form-control" required pattern="[A-Za-zА-Яа-яЁё]{2,}" title="Last Name should only contain letters"  value="<?php echo set_value('last_name'); ?>" />
      <span class="text-danger"><?php echo form_error('last_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="user_email" class="form-control" required pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Last Name should @ and domain name" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" id="pass" class="form-control" required value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger" id="passerror"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Password Confirmation</label>
      <input type="password" name="user_password_conf" id="passConf" class="form-control" required value="<?php echo set_value('user_password_conf'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password_conf'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>login">Login</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>

<script type="text/javascript">
  function validate(){
    var pass=document.getElementById('pass');
    var passconf=document.getElementById('passConf');
    var fail;

      if (pass!=""&& passConf!="") {
      if (pass.value!=passConf.value) {
        pass.style.border="2px solid red";
        passConf.style.border="2px solid red";
        document.getElementById('passerror').textContent="passwords don't coincide";
        fail=true;
      }
      else{
        document.getElementById('passerror').textContent="";
        pass.style.border="0px";
        passConf.style.border="0px";
      }
    }

    if (fail) {
      return false;
    }

    return true;
  }
</script>
