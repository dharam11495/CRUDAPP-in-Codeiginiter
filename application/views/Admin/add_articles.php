 <?php include('header.php'); ?>
 <br>
 <br>
 <br>

<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 card">
	<h1 class="text-center" style="color: lightblue;">Add Articles </h1>
	
<?php 	echo form_open('admin/userValidation'); ?>
<?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
   
     <div class="row">
     <div class="col-lg-12">
		<div class="form-group">
			<label for="Title">Article Title:</label>			
			<?php echo form_input(['class'=>'form-control','placeholder'=>'Article Title','name'=>'article_tittle','value'=>set_value('article_tittle')]); ?>
		</div>
	</div>
	<div class="col-lg-12" ">
		<?php  echo form_error('article_tittle'); ?>
	</div>
</div>
   
      <div class="row">
     <div class="col-lg-12">
		<div class="form-group">
			<label for="article_body">Article Body:</label>
			
			<?php echo form_textarea(['class'=>'form-control','placeholder'=>'Article Body','name'=>'article_body','value'=>set_value('article_body')]); ?>

		</div>
		</div>
	<div class="col-lg-12" ">
		<?php  echo form_error('article_body'); ?>
	</div>
</div>


	    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']); ?>
	     <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>
		 
		<!-- <button class="btn btn-success" type="submit" >Submit</button> -->
<br>
<br>
<br>
	
</div>
</div>
</div>
<br>


<?php include('footer.php'); ?>