<!-- section intro -->
    <section id="content">
		<div class="container">  
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-success">
        <div class="panel-heading">Detail Data Pengetahuan</div>
        <div class="panel-body">
			<table class="table table-bordered table-stripped dataTables1">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Basis Pengetahuan</th>
						<th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				foreach($detail as $row){
				?>
				<tr class="success">
				<td><?php echo $no++; ?></td>
				<td>Gejala : <b><?php echo $row->nama_gejala;?></b>
				<br>Pertanyaan : <b><?php echo $row->pertanyaan;?></b></td>
				<td>
				<a class="icon-edit" href="<?php echo site_url('a_pengetahuan/edit/'.$row->kd_pengetahuan);?>"></a>
				<a class="icon-remove" href="<?php echo site_url('a_pengetahuan/hapusPengetahuan/'.$row->kd_pengetahuan);?>" onclick="return confirm('Anda yakin?')"></a>
				</td>
				</tr>
				<?php
				}
				?>
                </tbody>
            </table>
			<a href="<?php echo site_url('a_pengetahuan') ?>" class="btn btn-success">
			<i class="fa fa-exit"></i> Kembali</a>
		</div>
		</div>
		</div>
		</div>
		</div>
    </section>
<!--/section intro-->