<?php
$a = array('active' => 'anak');
$this->load->view('templates/header',$a) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">DATA SEMUA ANAK</h4>
						<p class="category">semua anak yang dicintai ibu mereka</p>
					</div>
					<?php
					$status = $this->session->userdata('status');
					if($status == 'ibu'){ 
						?>
						<div class="row">
							<div class="col-md-12" style="margin-top:20px; margin-left:10px;">
								<a href="<?php echo site_url('anak/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
							</div>
						</div>
						<?php } ?>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<th><center>ID Anak</center></th>
									<th><center>Nama Ibu</center></th>
									<th><center>Nama Anak</center></th>
									<th><center>Tanggal Lahir</center></th>
									<th><center>Berat Lahir</center></th>
									<th><center>Tinggi Lahir</center></th>
									<th><center>Jenis Kelamin</center></th>
									<th><center>G.Darah</center></th>
									<th><center>Anak Ke-</center></th>
									<?php if($status == 'ibu'){  ?>
										<th><center>Aksi</center></th>
										<?php } ?>
									</thead>
									<tbody>
										<?php foreach ($anak as $key => $value) { ?>
											<tr>
												<td><center><?php echo $value->idanak; ?></center></td>
												<td><center><?php echo $value->namaibu; ?></center></td>
												<td><center><?php echo $value->namaanak; ?></center></td>
												<td><center><?php echo$value->tanggal_lahir; ?></center></td>
												<td><center><?php echo $value->berat_lahir; ?></center></td>
												<td><center><?php echo $value->tinggi_lahir; ?></center></td>
												<td><center><?php echo $value->jk; ?></center></td>
												<td><center><?php echo $value->gdarahanak; ?></center></td>
												<td><center><?php echo $value->anakke; ?></center></td>
												<?php if($status == 'ibu'){  ?>
													<td><center>
														<?php echo anchor(site_url("anak/edit/".$value->idanak),
															'<i class="fa fa-pencil"></i>', 
															'class="btn btn-warning"');?>
														<?php echo anchor(site_url("anak/delete/".$value->idanak),
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