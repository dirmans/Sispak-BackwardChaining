<!-- section intro -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Tambah Data Penyakit</div>
                        <div class="panel-body">
                            <div class="form">
                            <form class="form-validate form-horizontal" method="post" action="<?php echo site_url('a_penyakit/tambahPenyakit')?>">
                                <div class="form-group">
                                <label for="kd_penyakit" class="control-label col-lg-2">Kode Penyakit</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="kd_penyakit" type="text" value="<?php echo $kd_penyakit ?>" class="uneditable-input" readonly="true"/>
                                    </div>
                                </div>
								<div class="form-group">
                                <label for="nama_penyakit" class="control-label col-lg-2">Nama Penyakit</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="nama_penyakit" type="text" value=""/>
                                    </div>
                                </div>
								<div class="form-group">
                                <label for="penyebab" class="control-label col-lg-2">Penyebab</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="penyebab" type="text" value=""></textarea>
                                    </div>
                                </div>
								<div class="form-group">
                                <label for="solusi" class="control-label col-lg-2">Solusi</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="solusi" type="text" value=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="control-label col-lg-2">
                                        <button class="btn btn-outline btn-success" type="submit">Simpan</button>
                                    </div>
                                    <div class="control-label col-lg-2">
                                         <?php echo anchor('a_penyakit','Kembali',array('class'=>'btn btn-outline btn-primary'))?>
                                    </div>
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
      </div>
    </section>