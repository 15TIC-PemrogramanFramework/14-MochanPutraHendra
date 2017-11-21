<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>"/>
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="<?php echo base_url('assets/css/bootstrap.min.css" rel="stylesheet') ?>" />
        <link href="<?php echo base_url('assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet') ?>" />
        <link href="<?php echo base_url('assets/css/demo.css" rel="stylesheet') ?>" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    </head>
    <body>
	
		<!-- Main Menu -->
		<div id="wrapper">
			<div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/img/sidebar-1.jpg') ?>">
				<div class="logo">
                 <a href="#" class="simple-text">
                    Jasmine Laundry
                </a>
            	</div>
            	<div class="sidebar-wrapper">
            		 <ul class="nav">
            		 	<?php echo generate_sidemenu();?>
            		 </ul>
            	</div>
			</div>
			<div class="main-panel">
				<nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h2><?php echo strtoupper(basename($_SERVER['PHP_SELF'])) ?></h2>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown"> Hi,<?php echo $this->session->userdata('username');?>
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
             <div class="content">
                <div class="container-fluid">