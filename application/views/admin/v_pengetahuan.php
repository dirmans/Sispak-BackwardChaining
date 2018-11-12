<!-- section intro -->
    <section id="content">
		<div class="container">  
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-success">
        <div class="panel-heading">Data Pengetahuan</div>
        <div class="panel-body">
            <div class="col-md-9">
                <div class="form-group">
                    <form action="<?php echo site_url("a_pengetahuan/detail/?kd_penyakit=''") ?>" method="GET">
					<select name="kd_penyakit" class="form-control" required>
                    <option value="">--Pilih Penyakit--</option>
					<?php 
					foreach ($data_penyakit as $k) {
                        echo "<option value='$k->kd_penyakit'>$k->kd_penyakit - $k->nama_penyakit</option>";
					}
					?>
					</select>
					<input class="btn btn-primary" type="submit" value="Lihat Data">
					</input>
					</form>
				</div>
			</div>
			<div class="col-md-3">
                <a href="<?php echo site_url('a_pengetahuan/add') ?>" class="btn btn-success">
			<i class="fa fa-list"></i> Tambah Data Pengetahuan</a>
            </div>
            </div>
		</div>
		</div>
		</div>
		</div>
		</div>
    </section>
<!--/section intro-->