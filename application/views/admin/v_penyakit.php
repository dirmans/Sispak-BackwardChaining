<!-- section intro -->
    <section id="content">
		<div class="container">  
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-success">
        <div class="panel-heading">Data Penyakit</div>
        <div class="panel-body">
			<table class="table table-bordered table-stripped dataTables1">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Kode Penyakit</th>
						<th>Nama Penyakit</th>
						<th>Penyebab</th>
						<th>Solusi</th>
						<th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				if ($data_penyakit){
				foreach($data_penyakit as $row){
				?>
				<tr class="success">
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->kd_penyakit;?></td>
				<td><?php echo $row->nama_penyakit;?></td>
				<td><?php echo $row->penyebab;?></td>
				<td><?php echo $row->solusi;?></td>
				<td>
				<a class="icon-edit" href="<?php echo site_url('a_penyakit/edit/'.$row->kd_penyakit);?>"></a>
				<a class="icon-remove" href="<?php echo site_url('a_penyakit/hapusPenyakit/'.$row->kd_penyakit);?>" onclick="return confirm('Anda yakin?')"></a>
				</td>
				</tr>
				<?php }
				}
				?>
                </tbody>
            </table>
			<a href="<?php echo site_url('a_penyakit/add') ?>" class="btn btn-success">
			<i class="fa fa-list"></i> Tambah Data</a>
		</div>
		</div>
		</div>
		</div>
		</div>
    </section>
<!--/section intro-->