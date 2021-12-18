<div class="container">
	<div class="card">
		<div class="card-header">Edit rt01</div>
		<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>rt01/update">
				<input type="hidden" name="kd_warga" id="kd_warga" value="<?php echo $rt01->kd_warga; ?>" required>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $rt01->nama; ?>" class="form-control" id="nama" name="nama">
				</div>

				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
						<option value="pria" <?php echo ($rt01->jenis_kelamin ? 'pria' : 'selected' ); ?> >Pria</option>
						<option value="wanita" <?php echo ($rt01->jenis_kelamin ? 'wanita' : 'selected' ); ?> >Wanita</option>
					</select>
				</div>

				<div class="form-group">
					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $rt01->tempat_lahir; ?>">
				</div>

				<div class="form-group">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input type="date" class="form-control datepicker"  readonly id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $rt01->tanggal_lahir; ?>">
				</div>

				<div class="form-group">
					<label for="no_telp">No Telp</label>
					<input type="number" class="form-control" value="<?php echo $rt01->no_telp; ?>" id="no_telp" name="no_telp">
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"><?php echo $rt01->alamat; ?></textarea>
				</div>
				<div class="text-center">
					<a href="<?php echo base_url(); ?>rt01/index" class="btn btn-success">Back</a>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
				
			</form>
		</div>
	</div>
</div>