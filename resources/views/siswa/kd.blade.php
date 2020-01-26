@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Kompetensi Dasar</li>
      </ol>
</section>

    <!-- Main content -->
    <section class="content">
      
    	<div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kompetensi Dasar</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:50px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              <p>3.6 Mengevaluasi routing dinamis</p>
              <p>4.6 Mengkonfigurasi routing dinamis</p>
            </div>
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Kompetensi Inti</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:40px"></canvas>
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              <p>lorem ipsum dolor sit amet consectetur adipsicing elit</p>
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Indikator Pencapaian Kompetensi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:20px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              <p>3.6.1 Menjelaskan konsep routing dinamis</p>
              <p>3.6.2 mengklasifikasikan jenis routing</p>
              <p>3.6.3 menjelaskan perintah dasar pada routing</p>
              <p>3.6.4 menentukan cara konfigurasi routing dinamis</p>
              <p>4.6.1 melakukan konfigurasi routing</p>
              <p>4.6.2 menguji hasil konfigurasi routing dinamis</p>
              <p>4.6.3 membuat laporan konfigurasi routing</p>
            </div>
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tujuan Pembelajaran</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:20px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              <p>lalalaa yyeyeye lalala yeyeyey lalala yeyeye</p>
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
      
    </section>
@endsection
