<div class="wrapper"> 
	
	<main role="main" class="container"> 
		<div class="card">
			<div class="card-header">Data Warga Rt. 01</div>
			<div class="card-bod4">
				<div class="text-right mt-3">
					<a href="<?php echo base_url(); ?>dashboard/index" class="btn btn-success">Back</a>
					<a href="<?php echo base_url(); ?>rt01/create" class="btn btn-primary">Tambah Warga</a>
				</div>
				<br/>
				<br/>
				<table class="table table-bordered m-0 p-0">
					<tr>
						<th width="4%">No</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>Tempat Lahir</th>
						<th>Telp</th>
						<th>Alamat</th> 
						<th>Created At</th> 
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($rt01 as $row)
					{
						?>
						<tr>
							<td widtd="4%"><?php echo $no++; ?></td>
							<td><?php echo $row->nama; ?></td>
							<td><?php echo $row->jenis_kelamin; ?></td>
							<td><?php echo $row->tanggal_lahir; ?></td>
							<td><?php echo $row->tempat_lahir; ?></td>
							<td><?php echo $row->no_telp; ?></td>
							<td><?php echo $row->alamat; ?></td>
							<td><?php echo $row->created_at; ?></td>
							<td>
								<a href="<?php echo base_url(); ?>rt01/edit/<?php echo $row->kd_warga; ?>" class="btn btn-warning">Edit</a>
								<a href="<?php echo base_url(); ?>rt01/delete/<?php echo $row->kd_warga; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
	</main>
</div>