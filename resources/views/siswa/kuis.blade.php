@extends('layout.layout_siswa')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h2>Kuis</h2>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Kuis</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              <div class="row">
                <div class="col-md-1">
                  <h1>1</h1>
                </div>
                <div class="col-md-11">
                  <h3>Dalam Model OSI Layer, yang berfungsi untuk menerima data dari Session Layer adalah ?</h3>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">A. Network Layer </a></li>
                <li><a href="#">B. Data Link Layer </a></li>
                <li><a href="#">C. Transport Layer </a></li>
                <li><a href="#">D. Physical Layer </a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-purple"> 
              <div class="row">
                <div class="col-md-1">
                  <h1>2</h1>
                </div>
                <div class="col-md-11">
                  <h3>Sebuah program aplikasi yang bertugas untuk menerima permintaan paket dan memberinya balasan berupa paket yang di inginkan client disebut ? </h3>
                </div>
              </div>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">A. Client </a></li>
                <li><a href="#">B. Peer to Peer</a></li>
                <li><a href="#">C. Client-Server </a></li>
                <li><a href="#">D. Server </a></li>
              </ul>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-3">
            <a href="jawaban" class="btn btn-block btn-info btn-lg">submit &#10141</a>
          </div>
          <div class="col-md-6">
            <!-- <a href="jawaban" class="btn btn-block btn-info btn-lg">submit &#10141</a> -->
          </div>
          <div class="col-md-3"></div>
        </div>

      </div>
    </section>
@endsection
