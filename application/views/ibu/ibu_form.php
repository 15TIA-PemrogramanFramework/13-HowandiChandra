<?php 
$a = array('active' => 'ibu');
$this->load->view('templates/header',$a) ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $button ?> Ibu</h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo $action ?>" method="post">
                                    <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" value="<?php echo $username ?>" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="text" class="form-control" placeholder="Password" value="<?php echo $password ?>" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Ibu</label>
                                                <input type="text" class="form-control" placeholder="Nama" value="<?php echo $namaibu ?>" name="namaibu">
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Golongan Darah</label>
                                                <input type="text" class="form-control" placeholder="Golongan Darah" value="<?php echo $gdarahibu ?>" name="gdarahibu">
                                            </div>
                                        </div>
                                                                             
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" placeholder="Alamat" value="<?php echo $alamat ?>" name="alamat">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" placeholder="Tanggal" value="<?php echo $tanggallahiribu ?>" name="tanggallahiribu">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" placeholder="Tempat
                                                " value="<?php echo $tempatlahiribu ?>" name="tempatlahiribu">
                                            </div>
                                        </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input type="text" class="form-control" placeholder="Telepon" value="<?php echo $notelepon ?>" name="notelepon">
                                            </div>
                                        </div>
                                       
                                    </div>
                                 	<input type="hidden" name="idibu" value="<?php echo $idibu; ?>">
                                    <button type="submit" class="btn btn-info btn-fill pull-right"><?php echo $button ?></button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

<?php $this->load->view('templates/footer') ?>