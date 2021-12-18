<?php 
$this->load->view('layout/header');
$this->load->view('layout/navbar');
$this->load->view('layout/sidebar');

?>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-sm-12">

        <!-- general form elements disabled -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$title;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6">
              <form action="<?= site_url("crud_rt/update/")?>" method="POST">
                <?php foreach($masterrt as $r){ ?>
				<input type="hidden" name="id_rt" value="<?php echo $r->id_rt ?>">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama RT</label>
                  <input type="text" name="nama_rt" class="form-control" value="<?php echo $r->nama_rt; ?>"" required>
                </div>
				<div class="form-group">
                  <label>Ketua RT</label>
                  <input type="text" name="ketua_rt" class="form-control" value="<?php echo $r->ketua_rt; ?>" required>
                </div>
				<div class="form-group">
                  <label>No. HP Ketua RT</label>
                  <input type='number' name="nohp_ketua_rt" class="form-control" value="<?php echo $r->nohp_ketua_rt; ?>" required>
                </div>
				
				<?php } ?>
				
				 <div class="form-group" style="margin: 20px 0 0 0">
									<a href="<?= site_url("crud_rt")?>" type="button" class="btn btn-danger" data-dismiss="modal" style="width: 250px">Back</a>
									<button type="submit" name="save" value="save" class="btn btn-primary" style="width: 250px">Save</button><br><br>
                </div>
                
                

              </form>
              </div>
              <div class="col-sm-3"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <?php $this->load->view('layout/footer'); ?>