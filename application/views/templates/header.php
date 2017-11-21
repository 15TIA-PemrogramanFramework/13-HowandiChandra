<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CATATAN MASA KECIL ANAKKU</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/') ?>css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assets/') ?>css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/') ?>css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/') ?>css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    CATATAN ANAKKU
                </a>
            </div>
            <p><center>Tanggal Hari ini :</center></p>
            <p><center><?php echo tanggal(); ?></center> </p>
            <ul class="nav">
                <li <?php if($active == 'dashboard') { ?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('Dashboard') ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php
                $status = $this->session->userdata('status');
                if($status == 'admin') {
                 ?>
                
                <li <?php if($active == 'ibu') { ?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('ibu') ?>">
                        <i class="pe-7s-user-female"></i>
                        <p>Ibu</p>
                    </a>
                </li>
                <?php } ?>

                <li <?php if($active == 'anak') { ?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('anak') ?>">
                        <i class="pe-7s-smile"></i>
                        <p>Anak</p>
                    </a>
                </li>
                <li <?php if($active == 'imunisasi') { ?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('imunisasi') ?>">
                        <i class="pe-7s-eyedropper"></i>
                        <p>Imunisasi</p>
                    </a>
                </li>
                <li <?php if($active == 'pertumbuhan') { ?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('pertumbuhan') ?>">
                        <i class="pe-7s-graph1"></i>
                        <p>Pertumbuhan</p>
                    </a>
                </li>
                <li <?php if($active == 'perkembangan') { ?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('perkembangan') ?>">
                        <i class="pe-7s-like2"></i>
                        <p>Perkembangan</p>
                    </a>
                </li>
                  <li <?php if($active == 'persalinan') { ?> class="active" <?php } ?>>
                    <a href="<?php echo site_url('persalinan') ?>">
                        <i class="pe-7s-home"></i>
                        <p>Persalinan</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <?php if($status == 'ibu'){  ?> 
                           <a href="<?php echo site_url('ibu/edit/'.$this->session->userdata('idibu')) ?>">
                               <p>Edit Account</p>
                            </a>
                              <?php } ?>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout') ?>">
                                <p>Log out</p>
                            </a>

                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>