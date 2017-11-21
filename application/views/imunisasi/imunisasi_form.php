<?php
$a = array('active' => 'imunisasi');
 $this->load->view('templates/header',$a) ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $button ?> Imunisasi</h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo $action ?>" method="post">
                                <?php if($button == 'Tambah') { ?>
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
                                                <label>Tanggal Imunisasi</label>
                                                <input type="date" class="form-control" placeholder="tanggal" value="<?php echo $tglimunisasi ?>" name="tglimunisasi">
                                            </div>
                                        </div>
                                       </div>

                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tempat Imunisasi</label>
                                                <input type="text" class="form-control" placeholder="tempat" value="<?php echo $tempat_imunisasi ?>" name="tempat_imunisasi">
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                       <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Jenis Imunisasi</label>
                                                <input type="text" class="form-control" placeholder="jenis" value="<?php echo $jenis ?>" name="jenis">
                                            </div>
                                        </div>
                                      </div>                                            
                                 
                                   <!--<input type="hidden" name="idanak" value="<?php echo $this->session->userdata('idanak') ?>">-->
                                    <input type="hidden" name="idimunisasi" value="<?php echo $idimunisasi; ?>">
                                      
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