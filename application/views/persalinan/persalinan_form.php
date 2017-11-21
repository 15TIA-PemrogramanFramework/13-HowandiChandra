<?php
$a = array('active' => 'persalinan');
$this->load->view('templates/header',$a) ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><?php echo $button ?> Persalinan</h4>
                    </div>
                    <div class="content">
                        <form action="<?php echo $action ?>" method="post">
                            <?php if($button == 'Tambah'){ ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>ID Anak</label>
                                            <input type="text" class="form-control" placeholder="tempat" value="<?php echo $idanak ?>" name="idanak">
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="row">
                                   <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="tanggallahir" value="<?php echo $tanggal_lahir ?>" name="tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="tempat" value="<?php echo $tempat_lahir ?>" name="tempat_lahir">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alamat Lahir</label>
                                        <input type="text" class="form-control" placeholder="alamat" value="<?php echo $alamat_lahir ?>" name="alamat_lahir">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label>Waktu Lahir</label>
                                    <input type="text" class="form-control" placeholder="waktu" value="<?php echo $waktu_lahir ?>" name="waktu_lahir">
                                </div>
                            </div>
                        </div>                                            


                        <input type="hidden" name="idpersalinan" value="<?php echo $idpersalinan; ?>">

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