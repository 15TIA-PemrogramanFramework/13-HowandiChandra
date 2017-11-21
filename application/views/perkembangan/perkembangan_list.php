<?php 
$a = array('active' => 'perkembangan');
$this->load->view('templates/header',$a) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">DATA SEMUA PERKEMBANGAN ANAK</h4>
						<p class="category">Perkembangan buah hati tercinta</p>
					</div>
						<?php
					$status = $this->session->userdata('status');
					if($status == 'ibu'){ 
					 ?>
					<div class="row">
				
						<div class="col-md-12" style="margin-top:20px; margin-left:10px;">
						<a href="<?php echo site_url('perkembangan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
						</div>
					</div>
					<?php } ?>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<th><center>ID Perkembangan</center></th>
								<th><center>Nama Anak</center></th>
								<th><center>Tgl Pengecekan</center></th>
								<th><center>Gerakan Kasar</center></th>
								<th><center>Gerakan Halus</center></th>
								<th><center>Komunikasi</center></th>
								<th><center>Kemandirian</center></th>
									<?php if($status == 'ibu'){  ?>
								<th><center>Aksi</center></th>
								<?php } ?>
							</thead>
							<tbody>
								<?php foreach ($perkembangan as $key => $value) { ?>
									<tr>
										<td><center><?php echo $value->idperkembangan; ?></center></td>
										<td><center><?php echo $value->namaanak; ?></center></td>
										<td><center><?php echo$value->tglperkembangan; ?></center></td>
										<td><center><?php echo $value->gerakan_kasar; ?></center></td>
										<td><center><?php echo $value->gerakan_halus; ?></center></td>
										<td><center><?php echo $value->komunikasi; ?></center></td>
										<td><center><?php echo $value->kemandirian; ?></center></td>
										<?php if($status == 'ibu'){  ?>								
										<td><center>
											<?php echo anchor(site_url("perkembangan/edit/".$value->idperkembangan),
												'<i class="fa fa-pencil"></i>', 
												'class="btn btn-warning"');?>
											<?php echo anchor(site_url("perkembangan/delete/".$value->idperkembangan),
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