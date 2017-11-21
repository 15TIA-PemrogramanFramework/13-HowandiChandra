<?php 
$a = array('active' => 'pertumbuhan');
$this->load->view('templates/header',$a) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">DATA SEMUA PERTUMBUHAN ANAK</h4>
						<p class="category">Tumbuh kembang buah hati tercinta</p>
					</div>
					<?php
					$status = $this->session->userdata('status');
					if($status == 'ibu'){ 
					 ?>
					<div class="row">
						<div class="col-md-12" style="margin-top:20px; margin-left:10px;">
						<a href="<?php echo site_url('pertumbuhan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
						</div>
					</div>
					<?php } ?>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<th><center>ID Pertumbuhan</center></th>
								<th><center>Nama Anak</center></th>
								<th><center>Tanggal pengecekan</center></th>
								<th><center>Tinggi badan</center></th>
								<th><center>Berat badan</center></th>
								<th><center>Lingkar Kepala</center></th>
								<?php if($status == 'ibu'){  ?>
								<th><center>Aksi</center></th>
								<?php } ?>
							</thead>
							<tbody>
								<?php foreach ($pertumbuhan as $key => $value) { ?>
									<tr>
										<td><center><?php echo $value->idpertumbuhan; ?></center></td>
										<td><center><?php echo $value->namaanak; ?></center></td>
										<td><center><?php echo$value->tgltumbuh; ?></center></td>
										<td><center><?php echo $value->tinggitumbuh; ?></center></td>
										<td><center><?php echo $value->berattumbuh; ?></center></td>
										<td><center><?php echo $value->lingkarkepalatumbuh; ?></center></td>
										<?php if($status == 'ibu'){  ?>
										<td><center>
											<?php echo anchor(site_url("pertumbuhan/edit/".$value->idpertumbuhan),
												'<i class="fa fa-pencil"></i>', 
												'class="btn btn-warning"');?>
											<?php echo anchor(site_url("pertumbuhan/delete/".$value->idpertumbuhan),
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