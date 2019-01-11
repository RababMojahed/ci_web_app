<!DOCTYPE html>
	<head>
		<title></title>		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php  echo base_url();?>assets/css/style.css">

	</head>	
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="<?php echo base_url();?>">CI App</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url();?>about">About</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>/services" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Services
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?php echo base_url();?>/find_doctor">Find Doctors</a>
		          <a class="dropdown-item" href="<?php echo base_url();?>/tooth_clinic">Tooth Clinic</a>
		          <div class="dropdown-divider">Children Clinic </div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        <>
		      <li /div>
		      </liclass="nav-item">
		        <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
		      </li>
		    </ul>
		    <ul class='nav navbar-nav navbar-right '>
		    	<li>
		    	  <a class="nav-link" href="<?php echo base_url();?>services_c/create_service">Create Service</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<div class='container'>
		<?php echo br(1);?>
	