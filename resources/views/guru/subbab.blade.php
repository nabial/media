@extends('layout.layout_guru')

@section('content')
<section class="content-header">
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Materi</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Materi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</section>

    <!-- Main content -->
   <section class="content">
    <!-- okeh -->
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
                  <!-- Post -->
                  
                  <div class="post">
                    @foreach($datamateri as $materi)
                    <p>
                     {{ $materi->isi_materi }}
                    </p>
                    @endforeach
                  </div>
                   
                  <!-- /.post -->
                </div>
              </div>
            </div>

        </div>
    </div>
    <!-- end okeh -->
  </section>
@endsection
