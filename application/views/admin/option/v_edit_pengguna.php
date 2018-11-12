<!-- section intro -->
    <section id="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Edit Data Pengguna</div>
                        <div class="panel-body">
                            <div class="form">
                            <form class="form-validate form-horizontal" method="post" action="<?php echo site_url('a_pengguna/edit')?>">
                                <div class="form-group">
                                <label for="nama" class="control-label col-lg-2">Nama Pengguna</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="nama" type="text" value="<?php echo $baris['nama'] ?>" class="uneditable-input" readonly="true"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="username" class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="username" type="text" value="<?php echo $baris['username'] ?>"/>
                                    </div>
                                </div>
								<div class="form-group">
                                <label for="password" class="control-label col-lg-2">Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="password" type="password" value="<?php echo $baris['password'] ?>"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="control-label col-lg-2">
                                        <button class="btn btn-outline btn-success" name="submit" type="submit">Update</button>
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