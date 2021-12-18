<?php 
$this->load->view('layout/header');
$this->load->view('layout/navbar');
$this->load->view('layout/sidebar');
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard Sikebal</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">


    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                <?php 
                $no=1; 
                foreach($data_jml_rt1 as $view){
                 echo $view->jumlah_rt1;  
               }
               ?>
             </h3>

             <p>Jumlah Warga RT 01</p>
           </div>
           <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>
              <?php 
              
              foreach($data_jml_master_rt as $view){
               echo $view->jumlah_master_rt;  
             }
             ?>




           </h3>

           <p>Jumlah RT</p>
         </div>
         <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable ui-sortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Sales
          </h3>
          <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
              </li>
            </ul>
          </div>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content p-0">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="revenue-chart-canvas" style="height: 300px; display: block; width: 577px;" class="chartjs-render-monitor" width="577" height="300"></canvas>                         
          </div>
          <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
            <canvas id="sales-chart-canvas" style="height: 0px; display: block; width: 0px;" class="chartjs-render-monitor" width="0" height="0"></canvas>                         
          </div>  
        </div>
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- DIRECT CHAT -->
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">Direct Chat</h3>

        <div class="card-tools">
          <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
            <i class="fas fa-comments"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      
    </div>
    <!--/.direct-chat -->

    <!-- TO DO List -->
    <div class="card">
      <div class="card-header ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
          <i class="ion ion-clipboard mr-1"></i>
          To Do List
        </h3>

        <div class="card-tools">
          <ul class="pagination pagination-sm">
            <li class="page-item"><a href="#" class="page-link">«</a></li>
            <li class="page-item"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">»</a></li>
          </ul>
        </div>
      </div>
      
      
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
      </div>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->
  <section class="col-lg-5 connectedSortable ui-sortable">

    <!-- Map card -->
    <div class="card bg-gradient-primary">
      <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
          <i class="fas fa-map-marker-alt mr-1"></i>
          Peta
        </h3>
        <!-- card tools -->
        <div class="card-tools">
          <button type="button" class="btn btn-primary btn-sm daterange" data-toggle="tooltip" title="Date range">
            <i class="far fa-calendar-alt"></i>
          </button>
          <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <div class="card-body">
        <img src="<?= base_url();?>asset/img/map_kebalen.jpg">
      </div>
    </div>
    <!-- /.card-body-->
    <div class="card-footer bg-transparent">
      <div class="row">
        <div class="col-4 text-center">
          <div id="sparkline-1"><canvas style="width: 80px; height: 50px;" width="80" height="50"></canvas></div>
          <div class="text-white">Peta</div>
        </div>
        <!-- ./col -->
        <div class="col-4 text-center">
          <div id="sparkline-2"><canvas style="width: 80px; height: 50px;" width="80" height="50"></canvas></div>
          <div class="text-white">Online</div>
        </div>
        <!-- ./col -->
        <div class="col-4 text-center">
          <div id="sparkline-3"><canvas style="width: 80px; height: 50px;" width="80" height="50"></canvas></div>
          <div class="text-white">Sales</div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
  <!-- /.card -->

  <!-- solid sales graph -->
  <div class="card bg-gradient-info">
    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
      <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        Sales Graph
      </h3>

      <div class="card-tools">
        <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="396" height="250"></canvas>
  </div>
  <!-- /.card-body -->
  <div class="card-footer bg-transparent">
    <div class="row">
      <div class="col-4 text-center">
        <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

        <div class="text-white">Mail-Orders</div>
      </div>
      <!-- ./col -->
      <div class="col-4 text-center">
        <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

        <div class="text-white">Online</div>
      </div>
      <!-- ./col -->
      <div class="col-4 text-center">
        <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px none; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

        <div class="text-white">In-Store</div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->



</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div>

</section>
<!-- /.content -->
</div>
</div>
<?php $this->load->view('layout/footer'); ?>