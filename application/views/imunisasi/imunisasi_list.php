<?php
$a = array('active' => 'imunisasi');
$this->load->view('templates/header',$a) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">DATA SEMUA IMUNISASI</h4>
						<p class="category">semua imunisasi yang dilakukan</p>
					</div>
					<?php
					$status = $this->session->userdata('status');
					if($status == 'ibu'){ 
					 ?>
					<div class="row">
						<div class="col-md-12" style="margin-top:20px; margin-left:10px;">
						<a href="<?php echo site_url('imunisasi/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
						</div>
					</div>
					<?php } ?>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<th><center>ID Imunisasi</center></th>
								<th><center>Nama Anak</center></th>
								<th><center>Tanggal Imunisasi</center></th>
								<th><center>Tempat Imunisasi</center></th>
								<th><center>Jenis Imuniasi</center></th>
								<?php if($status == 'ibu'){  ?>
								<th><center>Aksi</center></th>
								<?php } ?>
							</thead>
							<tbody>
								<?php foreach ($imunisasi as $key => $value) { ?>
									<tr>
										<td><center><?php echo $value->idimunisasi; ?></center></td>
										<td><center><?php echo $value->namaanak; ?></center></td>
										<td><center><?php echo$value->tglimunisasi; ?></center></td>
										<td><center><?php echo $value->tempat_imunisasi; ?></center></td>
										<td><center><?php echo $value->jenis; ?></center></td>
										<?php if($status == 'ibu'){  ?>
										<td><center>
											<?php echo anchor(site_url("imunisasi/edit/".$value->idimunisasi),
												'<i class="fa fa-pencil"></i>', 
												'class="btn btn-warning"');?>
											<?php echo anchor(site_url("imunisasi/delete/".$value->idimunisasi),
												'<i class="fa fa-trash"></i>', 
												'class="btn btn-danger"');?>
										</center></td>
										<?php } ?>
									</tr>
									<?php } ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>  
			</div>
		</div>
	</div>


	<?php $this->load->view('templates/footer') ?>