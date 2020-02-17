@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Pembahasan</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Pembahasan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p>Score</p>
            </div>
            <div class="inner">
              <h3>100</h3>
            </div>
            <a href="kuis" class="small-box-footer">Ulangi kuis <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-1">
                  <h1>1</h1>
                </div>
                <div class="col-md-11">
                  <h3>Dalam Model OSI Layer, yang berfungsi untuk menerima data dari Session Layer adalah transport layer</h3>
                  <p>lapisan transport layer adalah lapisan keempat dari model jaringan OSI. Lapisan transport bertanggung jawab untuk menyediakan layanan-layanan yang dapat diandalkan kepada protokol-potokol yang terletak di atasnya</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>  
@endsection
