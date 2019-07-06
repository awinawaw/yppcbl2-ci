<html>
<head>
<meta charset="utf-8">
<title>YPPCBL</title>

<!-- Stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/css/responsive.css" rel="stylesheet">

<!-- Fav Icons -->
<link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/icons/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url() ?>asset/images/icons/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div> 

    <!-- main header -->
    <header class="main-header">

        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="outer-box">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="links-nav clearfix">
                            <li><i class="fa fa-phone"></i>Hubungi Kami Sekarang <strong>+62 22 2533081</strong></li>
                            <li><i class="fa fa-envelope-open"></i>Kirim Kami Email <strong>yppcbl@yahoo.co.id</strong></li>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <?php 
                    if($this->session->userdata('status') == "LOGIN"){
	                 ?>
	                  
	                <h5>Selamat Datang <?=$this->session->userdata('nama')?> </h5>
	                  <div class="top-right">
	                    <ul class="links-nav clearfix">
	                      <li> <a class="glyphicon glyphicon-user" href="<?=base_url()?>index.php/logout"> Logout</a></li>
	                    </ul>
	                  </div>

	                <?php 
	                  }else{
	                 ?>
	                  <div class="top-right">
	                  <ul class="links-nav clearfix">
	                    <li data-toggle="modal" data-target="#mydaftar"><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
	                    <li data-toggle="modal" data-target="#mylogin"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	                  </ul>
	                </div>
	              <?php 
	                } 
	              ?>
                </div>
                    
            </div>
        </div>
						<!-- Modal daftar -->
						<div id="mydaftar" class="modal fade" role="dialog">
							<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Pendaftaran Sekolah</h4>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="exampleInputEmail1">Fullname</label>
											<input type="text" class="form-control" id="Fullname" placeholder="Fullname">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Username</label>
											<input type="text" class="form-control" id="username" placeholder="Username">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" data-dismiss="modal">Daftar</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
								</div>
							</div>
						</div>
						<!-- end modal daftar -->
						
						<!-- Modal login -->
						<div class="modal" id="mylogin">
						    <div class="modal-dialog">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="modal-header">
						          <h4 class="modal-title">Modal Heading</h4>
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">
						          <form action="<?=base_url()?>index.php/login/submit" method="post">
									<?php if($this->session->flashdata('message')){?>
										<div class="alert alert-danger" role="alert">
										<?=$this->session->flashdata('message')?>   
										</div>

									<?php } ?>
								  <div class="form-group">
								    <label for="email">EMAIL</label>
								    <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email">    
								  </div>
								  <div class="form-group">
								    <label for="password">Password</label>
								    <input type="password" class="form-control" id="password" placeholder="Password" name="password">    
								  </div>  
								  <button type="submit" class="btn btn-primary">Submit</button>
						          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</form>
						        </div>
						    </div>
						  </div>
						</div>
					<!-- End Modal Login -->
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="container clearfix">
                    
                <div class="float-left logo-outer">
                    <div class="logo"><a href="<?php echo site_url('home') ?>"><img src="asset/images/logo/header-logo.png" alt="" title=""></a></div>
                </div>
                
                <div class="float-right upper-right clearfix">
                    
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
									<li <?php echo ($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''?'class="active"':'') ?>>
										<a href="<?php echo base_url('home')?>">Home </a>
									</li>
									<li <?php echo ($this->uri->segment(1) == 'about-us' || $this->uri->segment(1) == ''?'class="active"':'') ?>>
										<a href="<?php echo site_url('tentang_kami') ?>">Tentang Kami </a>
									</li>
									<li class="dropdown">
										<a href="<?php echo site_url('donasi') ?>">Donasi </a>
										<ul>
										<li <?php echo ($this->uri->segment(1)=='donasi_yayasan' || $this->uri->segment(1) == ''?'class="active"':'')?> >
										<a href="<?php echo site_url('donasi/donasi_yayasan')?>">Donasi Yayasan</a></li>
                                        <li <?php echo ($this->uri->segment(1)=='donasi_pasien' || $this->uri->segment(1) == ''?'class="active"':'')?> >
										<a href="<?php echo site_url('donasi/donasi_pasien')?>">Donasi Pasien</a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo site_url('penyebaran') ?>">Penyebaran </a>
									</li>
									<li <?php echo ($this->uri->segment(1) == 'kontak'?'class="active"':'') ?> >
										<a href="<?php echo base_url('kontak') ?>">Kontak </a>
									</li>
                                </ul>
                            </div>
                        </nav>
                        
                        <!-- Main Menu End-->
                        
                        <!-- Search box -->
                        <div class="outer-box">
                            <!--Search outer-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="link-btn"><a href="" class="theme-btn btn-style-two donate-box-btn">Donate Now</a></div>
                        </div>
                        
                    </div>
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="<?php echo site_url('home.php') ?>" class="img-responsive"><img src="<?php echo base_url() ?>asset/images/logo/header-logo.png" alt="" title=""></a>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                 <ul class="navigation clearfix">
									<li <?php echo ($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''?'class="active"':'') ?>>
										<a href="<?php echo site_url('Home') ?>">Home </a>
									</li>
									<li <?php echo ($this->uri->segment(1) == '' || $this->uri->segment(1) == ''?'class="active"':'') ?>>
										<a href="<?php echo site_url('tentang_kami') ?>">Tentang Kami </a>
									</li>
									<li class="dropdown">
										<a href="<?php echo site_url('donasi') ?>">Donasi </a>
										<ul>
										<li <?php echo ($this->uri->segment(1)=='donasi_yayasan' || $this->uri->segment(1) == ''?'class="active"':'')?> >
										<a href="<?php echo site_url('donasi/donasi_yayasan')?>">Donasi Yayasan</a></li>
                                        <li <?php echo ($this->uri->segment(1)=='donasi_pasien' || $this->uri->segment(1) == ''?'class="active"':'')?> >
										<a href="<?php echo site_url('donasi/donasi_pasien')?>">Donasi Pasien</a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo site_url('penyebaran') ?>">Penyebaran </a>
									</li>
									<li <?php echo ($this->uri->segment(1) == 'kontak'?'class="active"':'') ?> >
										<a href="<?php echo site_url('kontak') ?>">Kontak </a>
									</li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
                    
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
	