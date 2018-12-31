 <?php include('header.php'); ?>

 <br>
 <br>

 <div class="container">
 	<div class="row">
 		<?=   anchor('admin/addarticles','Add Articles',['class'=>'btn btn-lg btn-primary'])  ?>
 	</div>
 	
 	

 	
 	
 </div>









     <div class="container" style="margin-top: 5px;">

     	<?php  if($error=$this->session->flashdata('msg')): 
 	$msg_class = $this->session->flashdata('msg_class')
 	 ?>
		<div class="row">
			<div class="col-md-12">
				<div class="<?= $msg_class ?>">
					<?php echo $error; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<br>
	<br>

	
	<div class="row">
		
	<div class="table-responsive-md  col-md-12">
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th>Sr  No.</th>
				<th>Article Tittle</th>
				<th>Article Body</th>
				<th>Edit</th>
				<th>Delete</th> 
			</tr>
		</thead>
		<tbody>
			
			<?php   if(count($articles)): ?>
				<?php $x=1;   ?>
				<?php foreach($articles as $art):  ?>
			<tr>
				<td><?php echo $x; ?></td>
				<td><?php echo $art->article_tittle; ?></td>
				<td><?php echo $art->article_body; ?></td>
				<td><?=  anchor("admin/edituser/{$art->id}",'Edit',['class'=>'btn btn-primary']) ?></td>
				
				<td>
					<?=
					form_open('admin/delarticles'),
					form_hidden('id',$art->id),
					form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger','onclick'=>'return ConfirmDialog();']),
					form_close();
					?>
				</td>
				
				<td></td>
			</tr>
			<?php $x++; ?>
		<?php endforeach;  ?>
		<?php else: ?>
			<tr>
				<td>No data Available</td>
			</tr>
	<?php endif;  ?>
		</tbody>
		
	</table>
	
	<?= $this->pagination->create_links(['class'=>'page-link']); ?>
   
	</div>
	<div class="col-md-3"></div>
</div>
	<!-- <ul class="pagination">
		<li class="page-item"><a class="page-link" href=""><</a></li>
		<li class="page-item"><a class="page-link" href="">1</a></li>
		<li class="page-item"><a class="page-link" href="" class="active">2</a></li>
		<li class="page-item"><a class="page-link" href="">3</a></li>
		<li class="page-item"><a class="page-link" href="">></a></li>
	</ul> -->

</div>
<?php include('footer.php'); ?>