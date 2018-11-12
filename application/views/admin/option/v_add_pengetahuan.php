<!-- section intro -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Tambah Data Pengetahuan</div>
                        <div class="panel-body">
                            <div class="form">
                            <form class="form-validate form-horizontal" method="post" action="<?php echo site_url('a_pengetahuan/tambahPengetahuan')?>">
								<div class="form-group">
                                <label for="nama_penyakit" class="control-label col-lg-2">Penyakit</label>
									<div class="col-lg-10">
										<select name="kd_penyakit" class="form-control">
										<option value="">--Pilih Penyakit--</option>
										<?php foreach ($data_penyakit as $k) {
											echo "<option value='$k->kd_penyakit'>$k->kd_penyakit - $k->nama_penyakit</option>";
										} ?>
										</select>
									</div>
                                </div>
								<div class="form-group">
                                <label for="nama_gejala" class="control-label col-lg-2">Gejala</label>
									<div class="col-lg-10">
										<select name="kd_gejala" class="form-control">
										<option value="">--Pilih Gejala--</option>
										<?php foreach ($data_gejala as $k) {
											echo "<option value='$k->kd_gejala'>$k->kd_gejala - $k->nama_gejala</option>";
										} ?>
										</select>
									</div>
                                </div>
								<div class="form-group">
                                <label for="pertanyaan" class="control-label col-lg-2">Pertanyaan</label>
                                    <div class="col-lg-10">
										<select name="pertanyaan" class="form-control">
										<option value=""></option>
										<?php foreach ($data_gejala as $k) {
											echo "<option value='Apakah sapi mengalami $k->nama_gejala ?'>$k->kd_gejala - Apakah sapi mengalami $k->nama_gejala ?</option>";
										} ?>
										<option value="Selesai">Selesai</option>
										</select>
									</div>
                                </div>
                                <div class="form-group">
                                    <div class="control-label col-lg-2">
                                        <button class="btn btn-outline btn-success" type="submit">Simpan</button>
                                    </div>
                                    <div class="control-label col-lg-2">
                                         <?php echo anchor('a_pengetahuan','Kembali',array('class'=>'btn btn-outline btn-primary'))?>
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