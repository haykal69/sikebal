<?php

$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
	

    if($data_master_rt==0){
		$id_rt = 0;
        $nama_rt= '';
        $ketua_rt = '';
        $nohp_ketua_rt = 0;
    }else{
		$id_rt = $data_master_rt[0]->id_rt;
        $nama_rt = $data_master_rt[0]->nama_rt;
        $ketua_rt = $data_master_rt[0]->ketua_rt;
        $nohp_ketua_rt = $data_master_rt[0]->nohp_ketua_rt;
	
    }

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
    
		<?php if($notify=='Update'){ ?>
      <div id="Notify" class="alert-danger" style='padding:20px;'>
          Data Sudah Ada
      </div>
	  <?php } ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <div class="row">
                <div class="col-lg-2 col-xs-4">
                  <a href="<?= site_url('crud_rt/add_data/') ?>" class="btn btn-block btn-social btn-vk">
                    <i class="fa fa-plus"></i> Add
                  </a>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width:30px; text-align:center">No.</th>
                  <th style="width:230px">Nama RT</th>
                  <th style="width:30px">Nama Ketua RT</th>
                  <th style="width:290px">No. HP Ketua RT</th>
                  <th class="text-center">Option</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($data_master_rt as $view){?>
                    <tr>
					  <input type='hidden' name='id' value=<?=$view->id_rt;?>>
					  <td style="text-align:center"><?=$no;?></td>
                      <td><?=$view->nama_rt;?></td>
                      <td><?=$view->ketua_rt;?></td>
                      <td><?=$view->nohp_ketua_rt;?></td>
					  <td class="text-center">
						<a href="<?= site_url('crud_rt/proses_edit_data/'.$view->id_rt)?>"><i class="fa fa-edit" title="Edit"></i></a>
						<a onclick="return konfirmasi()" href="<?= site_url('crud_rt/delete_data/'.$view->id_rt)?>"><i class="fa fa-trash-o" title="Delete"></i></a>
					  </td>
                    </tr>
                  <?php $no++;}?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div><!-- Main content -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>



 
    
<?php 	$this->load->view('layout/footer'); ?>

<script>
	function konfirmasi()
	 {
		 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
		 if (tanya == true) return true;
		 else return false;
	}

  $(document).ready(function(){
    setTimeout(function(){
      $('#Notify').slideUp('slow');
    }, 2000);
  });
</script>