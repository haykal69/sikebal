<main role="main" class="container">
	<div class="card">
		<div class="card-header" >Data Warga Rt. 02</div>
		<div class="card-body">
			<div class="col-12 text-right m-0 p-0">
				<a href="<?php echo base_url(); ?>rt02/create" class="btn btn-success">Tambah Warga</a>
			</div>

			<br/>
			<br/>
			<table class="table table-bordered m-0 p-0" border="0">
				<tr>
					<th width="4%">No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Tempat Lahir</th>
					<th>Telp</th>
					<th>Alamat</th> 
					<th>Action</th>
				</tr>
				<?php 
				$no = 1;
				foreach($rt02 as $row)
				{
					?>
					<tr>
						<td widtd="5%"><?php echo $no++; ?></td>
						<td><?php echo $row->nama; ?></td>
						<td><?php echo $row->jenis_kelamin; ?></td>
						<td><?php echo $row->tanggal_lahir; ?></td>
						<td><?php echo $row->tempat_lahir; ?></td>
						<td><?php echo $row->no_telp; ?></td>
						<td><?php echo $row->alamat; ?></td>
						<td>
							<a href="<?php echo base_url(); ?>rt02/edit/<?php echo $row->kd_warga; ?>" class="btn btn-warning">ubah</a>
							<a href="<?php echo base_url(); ?>rt02/delete/<?php echo $row->kd_warga; ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</main>