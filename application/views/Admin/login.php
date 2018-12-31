 <?php include('header.php'); ?>

<div class="container"> <br>
	<div class="row">
		<div class="col-lg-3"></div>
		<br>
		<div class="col-lg-6 card"  style="width: 10rem;">
	<h1 class="text-center" style="color: lightblue;">User Login </h1>
	<?php  if($error=$this->session->flashdata('Login_Failed')):  ?>
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-danger">
					<?php echo $error; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php 	echo form_open('Login'); ?>
   
     <div class="row">
     <div class="col-lg-12">
		<div class="form-group">
			<label for="Username">Username:</label>			
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
		</div>
	</div>
	<div class="col-lg-12" ">
		<?php  echo form_error('uname'); ?>
	</div>
</div>
   
      <div class="row">
     <div class="col-lg-12">
		<div class="form-group">
			<label for="pwd">Password:</label>
			
			<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter password','name'=>'pass','value'=>set_value('pass')]); ?>

		</div>
		</div>
	<div class="col-lg-12" ">
		<?php  echo form_error('pass'); ?>
	</div>
</div>


	    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']); ?>
	     <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>
		 <?php echo anchor('users/register', 'Sign up?', 'class="link-class"') ?>
		<!-- <button class="btn btn-success" type="submit" >Submit</button> -->
<br>
<br>
<br>
	
</div>

</div>
</div>

<br>


<?php include('footer.php'); ?>