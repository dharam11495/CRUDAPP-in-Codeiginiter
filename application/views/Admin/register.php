<?php include('header.php'); ?>
<br>
<div class="container" style="margin-top:20px;">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 card">
<h1 class="text-center" style="color: lightblue;">Register Form</h1>

<?php  if($user=$this->session->flashdata('user')): 

$user_class=$this->session->flashdata('user_class')

 ?>
<div class="row">
<div class="col-lg-12">
<div class="alert <?= $user_class ?>">
<?= $user; ?>
</div>
</div>
</div>

<?php endif; ?>


 <?php echo form_open('Login/sendemail'); ?>   
 <div class="row">
 <div class="col-lg-12">
  <div class="form-group">
    <label for="Username">Username:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]);  ?>
  </div>
  </div>
  <div class="col-lg-12" ">
   <?php  echo form_error('username');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-12">
  <div class="form-group">
    <label for="pwd">Password:</label>
  
   <?php  echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]); ?>
   </div>
   </div>
   <div class="col-lg-12" ">
   <?php  echo form_error('password');  ?>
  </div>
   </div>
   <div class="row">
 <div class="col-lg-12">
  <div class="form-group">
    <label for="First name">First Name:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter First Name','name'=>'firstname','value'=>set_value('firstname')]);  ?>
  </div>
  </div>
  <div class="col-lg-12" ">
   <?php  echo form_error('firstname');  ?>
  </div>
  </div>
   <div class="row">
 <div class="col-lg-12">
  <div class="form-group">
    <label for="last name">Last Name:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Last Name','name'=>'  lastname','value'=>set_value('lastname')]);  ?>
  </div>
  </div>
  <div class="col-lg-12" ">
   <?php  echo form_error('lastname');  ?>
  </div>
  </div>
   <div class="row">
 <div class="col-lg-12">
  <div class="form-group">
    <label for="Username">Email:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]);  ?>
  </div>
  </div>
  <div class="col-lg-12">
   <?php  echo form_error('email');  ?>
  </div>
  </div>
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>
  <?php echo anchor('Login', 'Login Here', 'class="link-class"') ?>
  <br>
<br>
<br>
 
</div>
</div>
<br>
</div>
<br>
<br>


<?php include('footer.php'); ?>