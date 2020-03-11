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

      <div class="row">
            <div class="col-md-4">
              <div class="box box-warning direct-chat direct-chat-warning">
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
              <div class="box box-warning direct-chat direct-chat-warning">
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
      </div>

    </section>
    
@endsection
