<?php
$a = array('active' => 'pertumbuhan');
 $this->load->view('templates/header',$a) ?>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $button ?> Pertumbuhan</h4>
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
                                                <label>Tanggal Pengecekan</label>
                                                <input type="date" class="form-control" placeholder="tanggal" value="<?php echo $tgltumbuh ?>" name="tgltumbuh">
                                            </div>
                                        </div>
                                       </div>

                                        <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tinggi Badan</label>
                                                <input type="text" class="form-control" placeholder="tinggi" value="<?php echo $tinggitumbuh ?>" name="tinggitumbuh">
                                            </div>
                                            </div>
                                             <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Berat Badan</label>
                                                <input type="text" class="form-control" placeholder="berat" value="<?php echo $berattumbuh ?>" name="berattumbuh">
                                            </div>
                                            </div>
                                             <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Lingkar Kepala</label>
                                                <input type="text" class="form-control" placeholder="lingkarkepala" value="<?php echo $lingkarkepalatumbuh ?>" name="lingkarkepalatumbuh">
                                            </div>
                                            </div>
                                        </div>

                                                                              
                                                                 
                                    <input type="hidden" name="idpertumbuhan" value="<?php echo $idpertumbuhan; ?>">
                                      
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