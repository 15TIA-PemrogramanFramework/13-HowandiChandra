<?php
$a = array('active' => 'perkembangan');
 $this->load->view('templates/header',$a ) ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><?php echo $button ?> Perkembangan</h4>
                    </div>
                    <div class="content">
                        <form action="<?php echo $action ?>" method="post">
                         <?php if($button == 'Tambah'){ ?>
                            <div class="row">
                               <div class="col-md-12">
                                <div class="form-group">
                                    <label>ID Anak</label>
                                    <input type="text" class="form-control" placeholder="idanak" name="idanak" value="<?php echo $idanak ?>">
                                </div>
                            </div>
                        </div>
                         <?php } ?>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tanggal Perkembangan</label>
                                <input type="date" class="form-control" placeholder="tanggal" value="<?php echo $tglperkembangan ?>" name="tglperkembangan">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gerakan Kasar</label>
                                <input type="text" class="form-control" placeholder="kasar" value="<?php echo $gerakan_kasar ?>" name="gerakan_kasar">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gerakan Halus</label>
                                <input type="text" class="form-control" placeholder="halus" value="<?php echo $gerakan_halus ?>" name="gerakan_halus">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Komunikasi</label>
                                <input type="text" class="form-control" placeholder="komunikasi" value="<?php echo $komunikasi ?>" name="komunikasi">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kemandirian</label>
                                <input type="text" class="form-control" placeholder="kemandirian" value="<?php echo $kemandirian ?>" name="kemandirian">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="idperkembangan" value="<?php echo $idperkembangan; ?>">
                    <button type="submit" class="btn btn-info btn-fill pull-right"><?php echo $button ?>

                    </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php $this->load->view('templates/footer') ?>