@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Kompetensi</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Kompetensi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
    <section class="content">
    	<div class="row" >

        <!-- RIGHT -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kompetensi Dasar</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <p>3.6 Mengevaluasi routing dinamis</p>
              <p>4.6 Mengkonfigurasi routing dinamis</p>
            </div>
          </div>

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Kompetensi Inti</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <p>lorem ipsum dolor sit amet consectetur adipsicing elit</p>
            </div>
          </div>
        </div>

        <!-- LEFT -->
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Indikator Pencapaian Kompetensi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
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

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tujuan Pembelajaran</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <p>lalalaa yyeyeye lalala yeyeyey lalala yeyeye</p>
            </div>
          </div>
        </div>
        
      </div>
    </section>
@endsection
