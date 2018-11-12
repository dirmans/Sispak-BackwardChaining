<!-- section intro -->

	<section id="content">
		<div class="container">  
		<div class="row">
		<div class="col-lg-12">
		<div class="panel panel-success">
        <div class="panel-heading">Data Pengguna</div>
        <div class="panel-body">
			<table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				if ($data_pengguna){
				foreach($data_pengguna as $row){
				?>
				<tr class="success">
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->nama;?></td>
				<td><?php echo $row->username;?></td>
				<td>
				<a class="icon-edit" href="<?php echo site_url('a_pengguna/edit/'.$row->id);?>"></a>
				<a class="icon-remove" href="<?php echo site_url('a_pengguna/hapusPengguna/'.$row->id);?>" onclick="return confirm('Anda yakin?')"></a>
				</td>
				</tr>
				<?php }
				}
				?>
                </tbody>
            </table>
            <a href="<?php echo site_url('a_pengguna/add') ?>" class="btn btn-success">
			<i class="fa fa-list"></i> Tambah Data</a>
		</div>
		</div>
		</div>
		</div>
		</div>
    </section>
<!-- /section intro -->