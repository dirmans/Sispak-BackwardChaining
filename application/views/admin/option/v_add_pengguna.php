<!-- section intro -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Tambah Data Pengguna</div>
                        <div class="panel-body">
                            <div class="form">
                            <form class="form-validate form-horizontal" method="post" action="<?php echo site_url('a_pengguna/tambahPengguna')?>">
                                <div class="form-group">
                                <label for="nama" class="control-label col-lg-2">Nama</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="nama" name="nama" type="text" value=""/>
                                    </div>
                                </div>
								<div class="form-group">
                                <label for="username" class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="username" name="username" type="text" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="password" class="control-label col-lg-2">Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="password" placeholder="password" type="password" value=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="control-label col-lg-2">
                                        <button class="btn btn-outline btn-success" type="submit">Simpan</button>
                                    </div>
                                    <div class="control-label col-lg-2">
                                         <?php echo anchor('a_pengguna','Kembali',array('class'=>'btn btn-outline btn-primary'))?>
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