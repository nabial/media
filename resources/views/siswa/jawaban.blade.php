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
        <div class="col-md-3"></div>
        <div class="col-md-6" align="center">
          <div class="small-box bg-maroon">
            <div class="inner">
              <p>Nilai</p>
            </div>
            <div class="inner">
              @foreach($simpanjawaban as $jawaban)
                <h3>{{$jawaban->score}}</h3>
              @endforeach
            </div>
            <a href="kuis" class="small-box-footer">Ulangi kuis <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>

      <div class="row">

        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-teal"> 
              if(no_1 == "B")
                    <h1>jawaban kamu benar</h1>
            </div>
          </div>
        </div>   

      </div>


    </section>  
@endsection
