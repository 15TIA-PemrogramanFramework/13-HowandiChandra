<?php 
$a = array('active' => 'ibu');
$this->load->view('templates/header',$a) ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">DATA SEMUA IBU</h4>
						<p class="category">semua ibu yang menyanyangi anak mereka</p>
					</div>

					<div class="row">
						<div class="col-md-12" style="margin-top:20px; margin-left:10px;">
						<a href="<?php echo site_url('ibu/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
						</div>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">
							<thead>
								<th><center>ID Ibu</center></th>
								<th><center>Username</center></th>
								<th><center>Password</center></th>
								<th><center>Nama Ibu</center></th>
								<th><center>Tanggal Lahir</center></th>
								<th><center>Tempat Lahir</center></th>
								<th><center>Gol.Darah</center></th>                               
								<th><center>No.Telepon</center></th>
								<th><center>Alamat</center></th>
								<th><center>Aksi</center></th>
							</thead>
							<tbody>
								<?php foreach ($ibu as $key => $value) { ?>
									<tr>
										<td><center><?php echo $value->idibu; ?></center></td>
										<td><center><?php echo $value->username; ?></center></td>
										<td><center><?php echo $value->password; ?></center></td>
										<td><center><?php echo $value->namaibu; ?></center></td>
										<td><center><?php echo $value->tanggallahiribu; ?></center></td>
										<td><center><?php echo $value->tempatlahiribu; ?></center></td>
										<td><center><?php echo $value->gdarahibu; ?></center></td>
										<td><center><?php echo $value->notelepon; ?></center></td>
										<td><center><?php echo $value->alamat; ?></center></td>
										<td><center>
											<?php echo anchor(site_url("ibu/edit/".$value->idibu),
												'<i class="fa fa-pencil"></i>', 
												'class="btn btn-warning"');?>
											<?php echo anchor(site_url("ibu/delete/".$value->idibu),
												'<i class="fa fa-trash"></i>', 
												'class="btn btn-danger"');?>
										</center></td>
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