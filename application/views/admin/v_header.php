<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sistem Pakar Diagnosa Penyakit Sapi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- css -->
  <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/bootstrap-responsive.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/prettyPhoto.css')?>" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <!-- Theme skin -->
  <link id="t-colors" href="<?php echo base_url('assets/color/default.css')?>" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png')?>" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png')?>" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png')?>" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png')?>" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png')?>" />
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
      </div>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="<?php echo base_url('a_beranda')?>"><i class="icon-user"></i> Sispak Diagnosa Penyakit Sapi</a></h1>
            </div>
          </div>
          <div class="span">
            <div class="navbar navbar-static-top" role="navigation">
              <div class="nav in">
                    <li>
                      <a href="<?php echo base_url('a_beranda')?>">Beranda</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('a_pengguna')?>">Data Pengguna</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('a_penyakit')?>">Data Penyakit</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('a_gejala')?>">Data Gejala</a>
                    </li>
					<li>
                      <a href="<?php echo base_url('a_pengetahuan')?>">Data Pengetahuan</a>
                    </li>
					<li>
                      <a href="<?php echo base_url('a_beranda/logout')?>">Keluar</a>
                    </li>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->