<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sistem Pakar Diagnosa Penyakit Sapi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />
  
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
              <h1><a href="<?php echo base_url('beranda')?>"><i class="icon-user"></i> Sispak Diagnosa Penyakit Sapi</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="<?php echo base_url('beranda')?>">Beranda</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('konsultasi')?>">Konsultasi</a>
                    </li>                    
					<li>
                      <a href="<?php echo base_url('tentang')?>">Tentang Kami</a>
                    </li>
                    <li class="active">
                      <a href="<?php echo base_url('auth')?>">Masuk</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- section intro -->
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Halaman Masuk</h4>
			<form role="form" method="post" action="<?php echo site_url('auth');?>">
				<fieldset>
				<div class="row">
                <div class="span4 field form-group">
                  <label for="username" class="control-label col-lg-2">Username</label>
				  <input type="text" name="username" placeholder="Masukkan username"/>
                  <div class="validation"></div>
                </div>
				</div>
				<div class="row">
                <div class="span4 field form-group">
                  <label for="password" class="control-label col-lg-2">Password</label>
				  <input type="password" name="password" placeholder="Masukkan password" data-rule="password" data-msg="Username/password yang anda masukkan salah" />
				  <div class="validation"></div>
                </div>
				</div>
                <button class="btn btn-color margintop10 pull-left" name="submit" type="submit">Masuk</button>
				</fieldset>
			</form>
          </div>
        </div>
      </div>
    </section>

    <!-- /section intro -->
    <section id="works2">
      <div class="container">
      </div>
    </section>

    <footer>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Dirman Saputra. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by <a href="<?php echo base_url('beranda')?>">Dirman Saputra</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
  <script src="<?php echo base_url('assets/js/modernizr.custom.js')?>"></script>
  <script src="<?php echo base_url('assets/js/toucheffects.js')?>"></script>
  <script src="<?php echo base_url('assets/js/google-code-prettify/prettify.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
  <script src="<?php echo base_url('assets/js/portfolio/jquery.quicksand.js')?>"></script>
  <script src="<?php echo base_url('assets/js/portfolio/setting.js')?>"></script>
  <script src="<?php echo base_url('assets/js/animate.js')?>"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>

</html>
