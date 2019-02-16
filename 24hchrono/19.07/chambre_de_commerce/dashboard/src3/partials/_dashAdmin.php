<!---//////////////////////-->

      <div class="row">
        <div class="col-xl-3 col-md-6 col-12 ">
          <div class="box box-body pull-up text-center">
              <div class="font-size-40 font-weight-200">450</div>
              <div>Visites du jour</div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12 ">
          <div class="box box-body pull-up text-center">
              <div class="font-size-40 font-weight-200">1000</div>
              <div>Utilisateurs</div>
          </div>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-xl-3 col-md-6 col-12">
          <div class="box box-body pull-up text-center bg-success bg-deathstar-white">
              <div class="font-size-40 font-weight-200">200</div>
              <div>En ligne</div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          <div class="box box-body pull-up text-center bg-danger bg-deathstar-white">
              <div class="font-size-40 font-weight-200">800</div>
              <div>Hors ligne</div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-12 col-lg-6">
          <!-- Bar chart -->
          <div class="box">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Activite Anuelle</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-12 col-lg-6">
          <!-- Donut chart -->
          <div class="box">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Debits</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="donut-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-12">
          <!-- interactive chart -->
          <div class="box">
            <div class="box-header with-border">
              <i class="fa fa-line-chart"></i>

              <h3 class="box-title">Trafic sur le site</h3>

              <div class="box-tools pull-right">
                Temps reel
                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default bg-green btn-sm active" data-toggle="on">On</button>
                  <button type="button" class="btn btn-default bg-red btn-sm" data-toggle="off">Off</button>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div id="interactive" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
