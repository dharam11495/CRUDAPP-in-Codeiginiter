 <!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style type="text/css">
  .pagination a{
    position:relative;
display:block;
padding:.5rem .75rem;
margin-left:-1px;
line-height:1.25;
color:#007bff;
background-color:#fff;
border:1px solid #dee2e6;
   
  }

  .pagination a:hover{
    z-index:2;
color:#0056b3;
text-decoration:none;
background-color:#e9ecef;
border-color:#dee2e6
  }

  .pagination a:focus{
    z-index:2;outline:0;
  box-shadow:0 0 0 .2rem rgba(,123,255,.25)
  }
  
  
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= base_url(); ?>">Mini CRUD Application</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php
  if ($this->session->userdata('id')) 
  {
  	?>

  
      <li><a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger " >Logout</a></li>
   
  	
  	<?php
  }
  ?>

 
</nav>
  