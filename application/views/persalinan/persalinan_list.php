<?php
$a = array('active' => 'persalinan');
$this->load->view('templates/header',$a) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">DATA SEMUA PERSALINAN KELAHIRAN</h4>
						<p class="category">Data kelahiran anak</p>
					</div>
					<?php
					$status = $this->session->userdata('status');
					if($status == 'ibu'){ 
					 ?>
					<div class="row">
						<div class="col-md-12" style="margin-top:20px; margin-left:10px;">
						<a href="<?php echo site_url('persalinan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
						</div>
					</div>
					<?php } ?>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<th><center>ID Persalinan</center></th>
								<th><center>Nama Anak</center></th>
								<th><center>Tanggal Lahir</center></th>
								<th><center>Tempat Lahir</center></th>
								<th><center>Alamat Lahir</center></th>
								<th><center>Waktu Lahir</center></th>
								<?php if($status == 'ibu'){  ?>
								<th><center>Aksi</center></th>
								<?php } ?>
							</thead>
							<tbody>
								<?php foreach ($persalinan as $key => $value) { ?>
									<tr>
										<td><?php echo $value->idpersalinan; ?></td>
										<td><?php echo $value->namaanak; ?></td>
										<td><?php echo$value->tanggal_lahir; ?></td>
										<td><?php echo $value->tempat_lahir; ?></td>
										<td><?php echo $value->alamat_lahir; ?></td>
										<td><?php echo $value->waktu_lahir; ?></td>
										<?php if($status == 'ibu'){  ?>
										<td>
											<?php echo anchor(site_url("persalinan/edit/".$value->idpersalinan),
												'<i class="fa fa-pencil"></i>', 
												'class="btn btn-warning"');?>
											<?php echo anchor(site_url("persalinan/delete/".$value->idpersalinan),
												'<i class="fa fa-trash"></i>', 
												'class="btn btn-danger"');?>
										</td>
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