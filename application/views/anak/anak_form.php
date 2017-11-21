<?php 
$a = array('active' => 'anak');
$this->load->view('templates/header',$a) ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $button ?> Anak</h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo $action ?>" method="post">
                                    <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Anak</label>
                                                <input type="text" class="form-control" placeholder="nama" value="<?php echo $namaanak ?>" name="namaanak">
                                            </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Berat Lahir</label>
                                                <input type="text" class="form-control" placeholder="berat" value="<?php echo $berat_lahir ?>" name="berat_lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tinggi Lahir</label>
                                                <input type="text" class="form-control" placeholder="tinggi" value="<?php echo $tinggi_lahir ?>" name="tinggi_lahir">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                       <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Golongan Darah</label>
                                                <input type="text" class="form-control" placeholder="Golongan Darah" value="<?php echo $gdarahanak ?>" name="gdarahanak">
                                            </div>
                                        </div>
                                           <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $jk ?>" name="jk">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Anak Ke</label>
                                                <input type="text" class="form-control" placeholder="Anak ke" value="<?php echo $anakke ?>" name="anakke">
                                            </div>
                                        </div>                                            
                                    </div>
                                    <input type="hidden" name="idibu" value="<?php echo $this->session->userdata('idibu') ?>">
                                    <input type="hidden" name="idanak" value="<?php echo $idanak; ?>">
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