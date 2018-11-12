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
                      <a href="<?php echo base_url('beranda')?>">Beranda</a>
                    </li>
                    <li class="active">
                      <a href="<?php echo base_url('konsultasi')?>">Konsultasi</a>
                    </li>
					<li>
                      <a href="<?php echo base_url('tentang')?>">Tentang Kami</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('auth')?>">Masuk</a>
                    </li>
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
		<div class="col-lg-12">
		<div class="panel panel-success">
    <div class="panel-heading">Pertanyaan</div>
    <div class="panel-body">
    <div class="col-md-9">
    <div class="form-group">
		<?php
		if ($relasi){
        foreach($relasi as $row){
		?>
		<form action="<?php echo site_url("konsultasi/tambahhasil") ?>" method="post">
    <div class="col-md-8">     
      <div class="form-group">
        <div class="col-lg-10">
          <p>Apakah sapi mengalami <b><?php echo $row->nama_gejala;?></b> ?</p>
          <br>
          <input class="hidden" type="text" name="kd_penyakit[]" value="<?php echo $row->kd_penyakit;?>">
          <input class="hidden" type="text" name="kd_gejala[]" value="<?php echo $row->kd_gejala;?>">
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <select name="poin_gejala[]" class="form-control" required>
        <option value="">--Pilih--</option>
        <option value="<?php echo $row->poin_gejala;?>">Ya</option>
        <option value="0">Tidak</option>
      </select>
    </div>
		<?php }
		}
		?>
    <div class="col-md-8">
      <div class="form-group">
        <div class="col-lg-10">
          <button class="btn btn-primary" type="submit">Submit</button>
          <a href="<?php echo site_url('konsultasi') ?>" class="btn btn-success">Kembali</a>
        </div>
      </div>
    </div>
		</form>
    </div>
		</div>
    </div>
		</div>
		</div>
		</div>
		</div>
    </section>
<!--/section intro-->
    <section id="works">
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
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
  <script src="<?php echo base_url('assets/js/modernizr.custom.js')?>"></script>
  <script src="<?php echo base_url('assets/js/toucheffects.js')?>"></script>
  <script src="<?php echo base_url('assets/js/google-code-prettify/prettify.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js')?>"></script>
  <script src="<?php echo base_url('assets/js/portfolio/jquery.quicksand.js')?>"></script>
  <script src="<?php echo base_url('assets/js/portfolio/setting.js')?>"></script>
  <script src="<?php echo base_url('assets/js/animate.js')?>"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/metisMenu/metisMenu.min.js'); ?>"></script>
  <!-- Template Custom JavaScript File -->
  <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
  <!-- DataTables JavaScript -->
  <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables-responsive/dataTables.responsive.js'); ?>"></script>
  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
  </script>
  <script>
  $(function(){
	$("#showPass").click(function(){ // #showPass -> id Checkbox
	if($("[name=password]").attr('type')=='password'){
  $("[name=password]").attr('type','text');
  }else{
  $("[name=password]").attr('type','password');
  }
  });
  });
  </script>
</body>

</html>0