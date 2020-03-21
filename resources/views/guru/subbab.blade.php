@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Materi</h1>
                <ol class="breadcrumb">
                    <li><a href="dashguru"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Materi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
   <section class="content">

    <!-- coba -->
       <div class="row">
         <div class="col-md-12"> 
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                @foreach($datamateri as $materi)
                <li class="active"><a href="#activity" data-toggle="tab">{{ $materi->judul }}</a></li>   
                @endforeach
              </ul> 
                
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <div class="post">
                    @foreach($datamateri as $materi)
                     {{ $materi->isi_materi }}     
                    <img width="500px" src="{{ url('image/'.$materi->gambar) }}"/>
                    @endforeach
                  </div>
                </div>
              </div>

            </div>
          </div>
       </div>
    <!-- coba -->

    <div class="row">
          <div class="col-md-6">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/banner_img.png" alt="Photo" width="350">
                <p>Tahukah kamu tentang routing dinamis?</p>
              </div>
              <div class="box-caption">
                <a href="materiguru1"><h4>Pengenlanan Routing Dinamis</h4></a>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-subbab">
              <div class="box-gambar">
                <img class="img-responsive pad" src="admin_lte/dist/img/2538.jpg" alt="Photo" width="350">
                <p>???</p>
              </div>    
              <div class="box-caption">
                <a href="materiguru2"><h4>Jenis-jenis routing dinamis</h4></a>
              </div>
            </div>
          </div>
    </div>

  </section>
@endsection
