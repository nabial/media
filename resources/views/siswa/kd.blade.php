@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Kompetensi</h2>
                <ol class="breadcrumb">
                    <li><a href="dashsiswa"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Kompetensi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
    <section class="content">

      <!-- <div class="row">
            <div class="col-md-4">
              <div class="box box-navy direct-chat direct-chat-purple">
                <div class="box-header with-border">
                  <h3 class="box-title">Kompetensi Dasar</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button> 
                  </div>
                </div>

                <div class="box-body"> 
                  <div class="kompetensi">
                    <p>Mengevaluasi konsep routing dinamis</p>
                  </div>
                </div>

              </div>
            </div> 

             <div class="col-md-4">
              <div class="box box-primary direct-chat direct-chat-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Indikator Pencapaian Kompetensi</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button> 
                  </div>
                </div>

                <div class="box-body">
                  <div class="kompetensi">
                    <p>Menjelaskan konsep routing dinamis & Mengklasifikasikan jenis routing dinamis</p>
                  </div>
                </div>

              </div>
            </div>  

             <div class="col-md-4">
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Tujuan pembelajaran</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button> 
                  </div>
                </div>

                <div class="box-body">
                  <div class="kompetensi">
                    <p>Siswa mampu menjelaskan konsep routing dinamis & mampu mengklasifikasikan jenis routing dinamis</p>
                  </div>
                </div>

              </div>
            </div>   
      </div> -->

      <!-- START ALERTS AND CALLOUTS -->

      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-info">
                <h4>Kompetensi Dasar</h4>

                <p>Mengevaluasi konsep routing dinamis.</p>
              </div>
              <div class="callout callout-info">
                <h4>Indikator Pencapaian Kompetensi</h4>

                <p>Menjelaskan konsep routing dinamis & Mengklasifikasikan jenis routing dinamis</p>
              </div>
              <div class="callout callout-info">
                <h4>Tujuan pembelajaran</h4>

                <p>Siswa mampu menjelaskan konsep routing dinamis & mampu mengklasifikasikan jenis routing dinamis</p>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END ALERTS AND CALLOUTS -->

    </section>
    
@endsection
