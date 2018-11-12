<!-- section intro -->
    <section id="content">
		<div class="container">  
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-success">
        <div class="panel-heading">Data Gejala</div>
        <div class="panel-body">
			<table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Kode Gejala</th>
						<th>Nama Gejala</th>
						<th>Poin Gejala</th>
						<th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$total=0;
				if ($data_gejala){
				foreach($data_gejala as $row){
				$total=$total+$row->poin_gejala;
				?>
				<tr class="success">
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->kd_gejala;?></td>
				<td><?php echo $row->nama_gejala;?></td>
				<td><?php echo $row->poin_gejala;?></td>
				<td>
				<a class="icon-edit" href="<?php echo site_url('a_gejala/edit/'.$row->kd_gejala);?>"></a>
				<a class="icon-remove" href="<?php echo site_url('a_gejala/hapusGejala/'.$row->kd_gejala);?>" onclick="return confirm('Anda yakin?')"></a>
				</td>
				</tr>
				<?php }
				}
				?>
                </tbody>
            </table>
			<a href="<?php echo site_url('a_gejala/add') ?>" class="btn btn-success">
			<i class="fa fa-list"></i> Tambah Data</a>
		</div>
		</div>
		</div>
		</div>
		</div>
    </section>
<!--/section intro-->